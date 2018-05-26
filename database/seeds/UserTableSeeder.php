<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        DB::table('users')->insert([
            ['name' => 'user1', 'email' => 'a@a', 'password' => '$2y$10$1YvOnt2vN8RpiK9ufujliOi1lgDAixi0tK3L.Nu.JyrJLD1vTWuGm', ],
            ['name' => 'user2', 'email' => 'b@b', 'password' => '$2y$10$fVSijfn.YIBTquoBTlo3xua5/clS77V/32qln7oVcZ2/Q1jbH.g0e', ],
            ['name' => 'user3', 'email' => 'c@c', 'password' => '$2y$10$PTcro0WB0Qk/mkYXhck8ze.HnoHeIbIGX9YisetnkBc60JCps39Nq', ],
            ['name' => 'user4', 'email' => 'd@d', 'password' => '$2y$10$4VJ6lR5HiRVe0HpNXSH.iehgkI872p3rLQkNI9MNAK.VvZs2mH3Ny', ],
            ['name' => 'user5', 'email' => 'e@e', 'password' => '$2y$10$c9bl7YpBwS629VIiEnltGO5clYHXyOCjUMRJvSFBJwYIuAEh9dwV2', ],
            ['name' => 'user6', 'email' => 'f@f', 'password' => '$2y$10$jcvvi58jnT7BThBlgFM8Z.6ieOPRX4gVA49Uq96YtCrURJ8.S8e7W', ],
            ['name' => 'user7', 'email' => 'g@g', 'password' => '$2y$10$9rQ/TQl3AQTTGm2orRT.S.kVkmPiF9fUpX08zhoZduqKK9.Lw1ubq', ],
            ['name' => 'user8', 'email' => 'h@h', 'password' => '$2y$10$9/IfFi4u8lSb76YedHBh/.PZSaow.76xYjQuvGfMrlp1ByGew7Nju', ],
        ]);
    }
}
