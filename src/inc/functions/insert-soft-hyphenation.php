<?php
/**
 * insert soft hyphenation recommendations into known long words using &shy; entities
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

function kleiderordnung_insert_soft_hyphenation(string $phrase) {
  $dictionary = array(
    'Kleiderordnung',
    'Stilberatung',
    'nachhaltigem',
    'Gutscheine',
    'Consultation',
    'Professional',
    'Outfit',
    'Sustainability',
    'Startups',
    'Startup',
    'Subscription',
    'individuell',
    'buchbar',
    'Datenschutzerklärung',
    'Kleiderschrank',
    'Shopping',
    'individuelles',
    'Consulting',
    'Business',
    'Beratung',
    'Styling',
    'Online',
    'Organising',
  );
  $replacements = array(
    'Kleider&shy;ordnung',
    'Stil&shy;beratung',
    'nach&shy;hal&shy;tigem',
    'Gut&shy;sche&shy;ine',
    'Con&shy;sul&shy;ta&shy;tion',
    'Pro&shy;fessional',
    'Out&shy;fit',
    'Sus&shy;tain&shy;abil&shy;ity',
    'Start&shy;ups',
    'Start&shy;up',
    'Sub&shy;scription',
    'in&shy;di&shy;vi&shy;du&shy;ell',
    'buch&shy;bar',
    'Daten&shy;schutz&shy;er&shy;klä&shy;rung,',
    'Klei&shy;der&shy;schrank',
    'Shop&shiy;ping',
    'in&shy;di&shy;vi&shy;du&shy;el&shy;les',
    'Con&shy;sul&shy;ting',
    'Bu&shy;si&shy;ness',
    'Be&shy;rashy;tung',
    'Sty&shy;ling',
    'On&shy;li&shy;ne',
    'Or&shy;ga&shy;ni&shy;sing',
  );
  return str_replace($dictionary, $replacements, $phrase);
}
