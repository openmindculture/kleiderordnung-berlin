const compose = require('docker-compose');
const path = require('path');
const fs = require('fs');
const { setTimeout } = require('timers/promises')

async function init() {
	log ('Starting installation of local environment.');

	await downloadDockerImage().then(async () => {
		await startServerAndDbContainer().then(async () => {
			log('Finished core and database setup.');
			log('Giving database time to get ready (try to increase timeout in install-local-environment.js if this step fails)', false);
			await setTimeout(10000); // ugly hack to give SQL server more time until it is actually really ready
			await installCore().then(async () => {
				await installPlugins().then(async () => {
					await installThemes().then(async () => {
						await installAddonsAndCleanup().then(async () => {
							log('Finished installing WordPress on localhost. Looking for content to import...')
							if (fs.existsSync('./content.xml')) {
								compose.run(
									'wordpress-cli',
									'wp import ./content.xml --authors=create',
									{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
									.then(
										() => { log('Content import finished successfully.')},
										err => { console.error('Content import failed:', err)}
									);
							} else {
								console.error('Missing content import file (content.xml).');
							}
						});
					});
				});
			});
		});
	});
}

init().catch(console.error.bind(console));
/**
 * @param {string} msg
 * @param {boolean} reverseColor
 */
function log (msg, reverseColor= true) {
	console.log ( (reverseColor ? '\x1b[7m' : '') + msg + '\x1b[0m');
}

async function downloadDockerImage() {
	log('Dowloading WordPress docker image...');
	return await compose.pullAll({ cwd: path.join(__dirname), log: true});
}

async function startServerAndDbContainer() {
	log('Starting WordPress server and database docker containers...');
	return await compose.upAll({ cwd: path.join(__dirname), log: true, commandOptions: ['--force-recreate', '--build']});
}
async function installCore() {
	log('Installing and configuring Wordpress core and admin...');
	return await compose.run(
		'wordpress-cli',
		'wp core install --path=/var/www/html --url=http://localhost:1234" --title=TestSetup --admin_user=admin --admin_password=secret --admin_email=foo@bar.com',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
}
async function installPlugins() {
	log('Installing WordPress plugins...');
	return await compose.run(
		'wordpress-cli',
		/* specify the technical names (text domain) of plugins to be installed */
		'wp plugin install --activate advanced-custom-fields complianz-gdpr contact-form-7 flamingo incompatibility-status polylang svg-support',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] });
}

async function installThemes() {
	log('Installing and activating WordPress themes...');
	/*  add and activate (child) themes for your project here: */
	await compose.run(
		'wordpress-cli',
		'wp theme install --activate twentytwentythree',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] });
}
async function installAddonsAndCleanup() {
	log('Installing additional components and cleaning up...');
	await compose.run(
		'wordpress-cli',
		'wp language core install --activate de_DE',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
		.then(
			() => { log('Installed core languages')},
			err => { console.error('something went wrong:', err)}
		);

	await compose.run(
		'wordpress-cli',
		'wp language plugin install --all de_DE',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
		.then(
			() => { log('Installed plugin languages')},
			err => { console.error('something went wrong:', err)}
		);

	await compose.run(
		'wordpress-cli',
		'wp language theme install --all de_DE',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
		.then(
			() => { log('Installed theme languages')},
			err => { console.error('something went wrong:', err)}
		);

	await compose.run(
		'wordpress-cli',
		'wp theme delete twentytwentytwo twentytwentyone twentytwenty twentynineteen twentyseventeen twentysixteen twentyfifteen twentyfourteen twentythirteen twentytwelve twentyeleven twentyten',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
		.then(
			() => { log('Deleted unnsecessary themes')},
			err => { console.error('something went wrong:', err)}
		);

	compose.run(
		'wordpress-cli',
		'wp plugin delete akismet hello',
		{ cwd: path.join(__dirname), commandOptions: ['--rm'] })
		.then(
			() => { log('Deleted unnsecessary plugins')},
			err => { console.error('something went wrong:', err)}
		);
}

