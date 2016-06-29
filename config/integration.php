<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Policies
    |--------------------------------------------------------------------------
    |
    | Here we specify the policy classes to use. Change these if you want to
    | extend the provided classes and use your own instead.
    |
    */

    'policies' => [
        'forum' => VivifyIdeas\Forum\Policies\ForumPolicy::class,
        'model' => [
            VivifyIdeas\Forum\Models\Category::class  => VivifyIdeas\Forum\Policies\CategoryPolicy::class,
            VivifyIdeas\Forum\Models\Thread::class    => VivifyIdeas\Forum\Policies\ThreadPolicy::class,
            VivifyIdeas\Forum\Models\Post::class      => VivifyIdeas\Forum\Policies\PostPolicy::class
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Application user model
    |--------------------------------------------------------------------------
    |
    | Your application's user model.
    |
    */

    'user_model' => App\User::class,

    /*
    |--------------------------------------------------------------------------
    | Application user name
    |--------------------------------------------------------------------------
    |
    | The attribute to use for the username.
    |
    */

    'user_name' => 'name',

];
