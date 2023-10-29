<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Hari Dharma',
        //     'email' => 'haridharma1@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        \App\Models\User::factory(3)->create();


        Category::create([
            'name' => 'Web-Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa. Suspendisse id dui dapibus, dapibus erat nec, vulputate ipsum. Curabitur et lorem non lectus fermentum bibendum. Duis ut erat ac turpis iaculis malesuada ut id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce nec elit nec nisi egestas convallis. Proin eget mi quam. Sed luctus, arcu in gravida tincidunt, arcu justo tincidunt lectus, sit amet feugiat libero dolor sed arcu. Etiam id erat vel urna rhoncus scelerisque ac ac odio. Nunc ut tortor vel purus vehicula eleifend in vel augue. Morbi luctus urna eget ligula eleifend, a feugiat dui vestibulum. Vestibulum dignissim, sapien et laoreet varius, nunc ligula accumsan libero, nec lacinia elit nulla ut mi. Cras suscipit, ex in rhoncus varius, neque eros accumsan erat, at hendrerit tellus leo in sapien. Nulla nec justo vel purus aliquam malesuada. Donec aliquet nunc in libero cursus feugiat. Nam euismod, purus eu scelerisque rhoncus, odio ipsum luctus nulla, at aliquet lorem nisl ac nisi. Vestibulum non odio a risus vulputate sollicitudin id ac libero. Curabitur scelerisque libero vel urna facilisis, non varius elit tincidunt. Suspendisse lacinia a velit at bibendum. Nulla venenatis vulputate odio a euismod. Curabitur eget sapien varius, fermentum leo nec, lacinia nulla.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa. Suspendisse id dui dapibus, dapibus erat nec, vulputate ipsum. Curabitur et lorem non lectus fermentum bibendum. Duis ut erat ac turpis iaculis malesuada ut id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce nec elit nec nisi egestas convallis. Proin eget mi quam. Sed luctus, arcu in gravida tincidunt, arcu justo tincidunt lectus, sit amet feugiat libero dolor sed arcu. Etiam id erat vel urna rhoncus scelerisque ac ac odio. Nunc ut tortor vel purus vehicula eleifend in vel augue. Morbi luctus urna eget ligula eleifend, a feugiat dui vestibulum. Vestibulum dignissim, sapien et laoreet varius, nunc ligula accumsan libero, nec lacinia elit nulla ut mi. Cras suscipit, ex in rhoncus varius, neque eros accumsan erat, at hendrerit tellus leo in sapien. Nulla nec justo vel purus aliquam malesuada. Donec aliquet nunc in libero cursus feugiat. Nam euismod, purus eu scelerisque rhoncus, odio ipsum luctus nulla, at aliquet lorem nisl ac nisi. Vestibulum non odio a risus vulputate sollicitudin id ac libero. Curabitur scelerisque libero vel urna facilisis, non varius elit tincidunt. Suspendisse lacinia a velit at bibendum. Nulla venenatis vulputate odio a euismod. Curabitur eget sapien varius, fermentum leo nec, lacinia nulla.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa. Suspendisse id dui dapibus, dapibus erat nec, vulputate ipsum. Curabitur et lorem non lectus fermentum bibendum. Duis ut erat ac turpis iaculis malesuada ut id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce nec elit nec nisi egestas convallis. Proin eget mi quam. Sed luctus, arcu in gravida tincidunt, arcu justo tincidunt lectus, sit amet feugiat libero dolor sed arcu. Etiam id erat vel urna rhoncus scelerisque ac ac odio. Nunc ut tortor vel purus vehicula eleifend in vel augue. Morbi luctus urna eget ligula eleifend, a feugiat dui vestibulum. Vestibulum dignissim, sapien et laoreet varius, nunc ligula accumsan libero, nec lacinia elit nulla ut mi. Cras suscipit, ex in rhoncus varius, neque eros accumsan erat, at hendrerit tellus leo in sapien. Nulla nec justo vel purus aliquam malesuada. Donec aliquet nunc in libero cursus feugiat. Nam euismod, purus eu scelerisque rhoncus, odio ipsum luctus nulla, at aliquet lorem nisl ac nisi. Vestibulum non odio a risus vulputate sollicitudin id ac libero. Curabitur scelerisque libero vel urna facilisis, non varius elit tincidunt. Suspendisse lacinia a velit at bibendum. Nulla venenatis vulputate odio a euismod. Curabitur eget sapien varius, fermentum leo nec, lacinia nulla.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla eget ligula nec eleifend. Nulla facilisi. Phasellus ut suscipit est, in sagittis elit. Aliquam erat volutpat. Nullam eget odio id sapien malesuada malesuada. Curabitur a quam nisl. Suspendisse vitae odio vel dui fermentum efficitur. Sed ac aliquam risus. Phasellus euismod cursus neque, vel vestibulum felis aliquam eget. Vivamus id suscipit justo. Sed ut justo ut justo tristique facilisis. In auctor, est eu tincidunt tristique, odio dolor malesuada metus, at laoreet libero justo id nulla. Cras id facilisis justo. Sed tincidunt sit amet sapien vel pharetra. Integer nec justo et augue aliquam egestas eu eget urna. Quisque efficitur efficitur ligula, id congue justo. Integer euismod lacinia enim, vel tristique velit. Morbi nec dui nec turpis fringilla auctor. In nec libero urna. Maecenas a euismod tellus. Sed id fermentum libero. Cras rhoncus a lectus id luctus. Proin sed leo arcu. Sed varius, est vel dignissim iaculis, nisi neque bibendum nisi, non vehicula urna massa nec felis. Nunc congue ipsum nec scelerisque. Sed at hendrerit libero. Integer ac odio nec libero varius iaculis. Sed bibendum nunc eget purus venenatis, id rhoncus metus volutpat. Phasellus euismod risus ac orci mattis iaculis. Phasellus fringilla libero vel arcu iaculis, non varius quam euismod. Suspendisse vestibulum tincidunt justo, sit amet dictum arcu. Donec vel vulputate libero. Vivamus nec justo non dolor feugiat hendrerit. Integer non nisl et libero accumsan congue a eget ligula. Integer consectetur luctus nibh, eu egestas felis vulputate sed. Quisque eu arcu justo. Sed varius tincidunt eros. Nunc euismod, lectus in auctor mattis, neque quam sagittis urna, sed bibendum libero odio eu ligula. Integer vel est id libero tincidunt egestas. Vivamus non odio massa. Suspendisse id dui dapibus, dapibus erat nec, vulputate ipsum. Curabitur et lorem non lectus fermentum bibendum. Duis ut erat ac turpis iaculis malesuada ut id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce nec elit nec nisi egestas convallis. Proin eget mi quam. Sed luctus, arcu in gravida tincidunt, arcu justo tincidunt lectus, sit amet feugiat libero dolor sed arcu. Etiam id erat vel urna rhoncus scelerisque ac ac odio. Nunc ut tortor vel purus vehicula eleifend in vel augue. Morbi luctus urna eget ligula eleifend, a feugiat dui vestibulum. Vestibulum dignissim, sapien et laoreet varius, nunc ligula accumsan libero, nec lacinia elit nulla ut mi. Cras suscipit, ex in rhoncus varius, neque eros accumsan erat, at hendrerit tellus leo in sapien. Nulla nec justo vel purus aliquam malesuada. Donec aliquet nunc in libero cursus feugiat. Nam euismod, purus eu scelerisque rhoncus, odio ipsum luctus nulla, at aliquet lorem nisl ac nisi. Vestibulum non odio a risus vulputate sollicitudin id ac libero. Curabitur scelerisque libero vel urna facilisis, non varius elit tincidunt. Suspendisse lacinia a velit at bibendum. Nulla venenatis vulputate odio a euismod. Curabitur eget sapien varius, fermentum leo nec, lacinia nulla.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
