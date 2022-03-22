<?php

namespace Faker\Provider\fr_CA;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',        
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    ];

    /**
     * This list is more or less the same as in \Faker\Provider\fr_FR\Person.php
     * Some common names were added and other removed.
     */
    protected static $firstNameMale = [
        'Steven', 'Hugo', 'Martin', 'Sébastien', 'Cédrik', 'Olivier', 'André', 'Gabriel', 'Jean-Marc', 'Mickael', 'Alexis', 'Antonio', 'Eric',
    ];

    protected static $firstNameFemale = [
        'Joëlle', 'Caroline', 'Chloé', 'Amélie', 'Valérie', 'Laurence', 'Vanessa', 'Stéphanie', 'Joannie',
    ];

    /**
     * These last names come from this list of most common family names in Québec (1 to 130)
     * http://fr.wikipedia.org/wiki/Liste_des_noms_de_famille_les_plus_courants_au_Québec
     */
    protected static $lastName = [
        'Blondin', 'Langlois', 'Laliberté', 'Desrosby', 'Millette', 'Marion', 'Hurtubise', 'Hamel', 'Desrochers', 'Dionne', 'Beauchamp', 'Durand-Séguin', 'Guay', 'Lamontagne', 'Dubois', 'Turmel', 'Boisvert', 'Bourdon', 'Buckingham', 'Bourdages-Desjardins', 'Da Costa',
    ];
}
