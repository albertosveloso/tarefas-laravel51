<?php
/*
 * Classe que retira os títulos das pessoas como Sr. Sra, Dra, Mestre etc....
 * e que extend da classe pessoa do faker para não alterarmos diretamente no faker
 */

namespace App\Faker;

use Faker\Provider\pt_BR\Person;

class Pessoa extends Person
{
    protected static $titleMale = [];

    protected static $titleFemale = [];

}