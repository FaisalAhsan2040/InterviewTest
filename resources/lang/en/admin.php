<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'subject' => [
        'title' => 'Subjects',

        'actions' => [
            'index' => 'Subjects',
            'create' => 'New Subject',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'department' => [
        'title' => 'Department',

        'actions' => [
            'index' => 'Department',
            'create' => 'New Department',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'department' => [
        'title' => 'Department',

        'actions' => [
            'index' => 'Department',
            'create' => 'New Department',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'D_name' => 'D name',
            
        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    'permission' => [
        'title' => 'Permissions',

        'actions' => [
            'index' => 'Permissions',
            'create' => 'New Permission',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    'subject' => [
        'title' => 'Subject',

        'actions' => [
            'index' => 'Subject',
            'create' => 'New Subject',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'subject_name' => 'Subject name',
            'subject_type' => 'Subject type',
            'course_id' => 'Course',
            'Status' => 'Status',
            
        ],
    ],

    'department' => [
        'title' => 'Department',

        'actions' => [
            'index' => 'Department',
            'create' => 'New Department',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'D_name' => 'D name',
            
        ],
    ],

    'user' => [
        'title' => 'User',

        'actions' => [
            'index' => 'User',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            
        ],
    ],

    'blog' => [
        'title' => 'Blog',

        'actions' => [
            'index' => 'Blog',
            'create' => 'New Blog',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'blog_name' => 'Blog name',
            'blog_category' => 'Blog category',
            'status' => 'Status',
            
        ],
    ],

    'blog-category' => [
        'title' => 'Blog Categories',

        'actions' => [
            'index' => 'Blog Categories',
            'create' => 'New Blog Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'blog_category_name' => 'Blog category name',
            'status' => 'Status',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];