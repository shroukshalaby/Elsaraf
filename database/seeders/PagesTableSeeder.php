<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pages')->delete();

        \DB::table('pages')->insert(array (
            0 =>
            array (
                'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>',

                'id' => 4,
                'status' => 1,
                'title' => 'AML Policy',

            ),
            1 =>
            array (
                'content' => '<header>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>&nbsp;</div>
</div>
<div>
<div>
<div>
<h1>Diversity</h1>
<p>Individuals. Ideas. Inspiration. Yes, we\'re open</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<div>
<div>
<div>
<div>
<div>
<div>
<div data-nn-conditional="">
<div>
<p>Diversity and inclusion matter in our business. An inclusive and diverse workforce makes us better leaders and contributes to a more innovative, dynamic and, ultimately, more successful company. And, variety helps us meet the needs of our diverse client base.</p>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
<div>
<div>
<div>
<div>
<div data-nn-conditional="">
<h2 id="col1textimage">Inclusiveness</h2>
<div>
<p>We promote inclusion and encourage open dialogue to draw out everyone\'s opinions and perspectives. We recognize a diverse range of contributions to keep our people energetic, engaged and inspired. And we are a signatory to the UN Standards of Conduct for Business regarding tackling LGBTI discrimination around the world.</p>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
<div>
<div>
<div data-nn-conditional="">
<h2 id="col2textimage">Flexibility</h2>
<div>
<p>We offer a modern, flexible working environment. We work where and how it\'s most appropriate according to individual, role and team requirements.</p>
</div>
</div>
</div>
<div>
<div>&nbsp;</div>
</div>
</div>
</div>
</div>
</div>',

                'id' => 6,
                'status' => 1,
                'title' => 'Diversity',

            ),
            2 =>
            array (
                'content' => '<div>
<span>The big picture</span>
</div>
<div>
<div>
<p>We’re passionate about supporting the places where we live and work. Through our long-standing sponsorships of motor sports and contemporary art, we connect with communities in new and exciting ways every day. It’s our way of understanding how the world works, one pit stop and brush stroke at a time.</p>
</div>
</div>',

                'id' => 7,
                'status' => 1,
                'title' => 'Sponsoring',

            ),
        ));


    }
}
