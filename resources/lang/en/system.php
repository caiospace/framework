<?php

return [

    /*
    |--------------------------------------------------------------------------
    | AvoRed E commerce Package System Language Representation
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */
    'fields' => [
        'name' => 'Name',
        'slug' => 'Slug',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'sort_order' => 'Sort Order',
        'dropdown_option' => 'Dropdown Option',
        'sku' => 'SKU',
        'barcode' => 'Barcode',
        'price' => 'Price',
        'cost_price' => 'Cost Price',
        'height' => 'Height',
        'width' => 'Width',
        'length' => 'Length',
        'weight' => 'Weight',
        'status' => 'Status',
        'qty' => 'Qty',
        'is_taxable' => 'Is Taxable',
        'track_stock' => 'Track Stock',
        'alt_text' => 'Image alt text',
        'description' => 'Description',
        'code' => 'Code',
        'type' => 'Type',
        'amount' => 'Amount',
        'category' => 'Category',
        'data_type' => 'Data Type',
        'field_type' => 'Field Type',
        'use_for_all_products' => 'Use for all products',
        'is_visible_frontend' => 'Is visible frontend',
        'display_as' => 'Display as',
        'identifier' => 'Identifier',
        'menu_builder' => 'Menu Builder',
        'category_list' => 'Category List',
        'frontmenu_list' => 'Frontend Menu List',
        'order_id' => 'Order ID',
        'payment_option' => 'Payment option',
        'shipping_option' => 'Shipping option',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
        'total' => 'Total',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'is_super_admin' => 'Is super admin',
        'email' => 'Email',
        'image_file' => 'Image File',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'language' => 'Language',
        'role_id' => 'Staff Role',
        'is_default' => 'Is default',
        'active_from' => 'Active From',
        'active_till' => 'Active Till',
        'symbol' => 'Symbole',
        'conversation_rate' => 'Conversation Rate',
        'image' => 'Image',
        'dropdown_options' => 'Dropdown Options',
        'customer_name' => 'Customer Name',
        'customer_email' => 'Customer Email',
        'customer_phone' => 'Customer Phone',
        'from' => 'From',
        'to' => 'To',
        'group_by' => 'Group By',
    ],
    'common' => [
        'list' => 'List',
        'create' => 'Create',
        'edit' => 'Edit',
    ],
    'terms' => [
        'category' => 'Category',
        'dashboard' => 'Dashboard',
        'product' => 'Product',
        'property' => 'Property',
        'attribute' => 'Attribute',
        'menu' => 'Menu',
        'menu_group' => 'Menu Group',
        'page' => 'Page',
        'order' => 'Order',
        'order_status' => 'Order Status',
        'admin_user' => 'Staff',
        'user_group' => 'User Group',
        'promotion_code' => 'Promotion code',
        'configuration' => 'Configuration',
        'currency' => 'Currency',
        'role' => 'Role',
        'customer' => 'Customer',
        'address' => 'Customer Address',
        'shipping_address' => 'Customer Shipping Address',
        'billing_address' => 'Customer Billing Address',
        
    ],
    'pages' => [
        'title' => [
            'list' => ':attribute List',
            'create' => 'Create :attribute',
            'edit' => 'Edit :attribute',
            'show' => 'Show :attribute',
            'info' => ':attribute Information'

        ]
    ],
    'notification' => [
        'not_enough_qty' => 'Sorry We do not have enought qty available for this product.'
    ],

    'auth' => [
        'form' => [
            'title' => 'Sign in to admin account',
            'password' => 'Enter your password',
            'password_confirmation' => 'Confirm Your Password',
            'email' => 'Enter your email address',
            'forgot-password' => 'Forgot your password?',
            'remember-me' => 'Remember me',
            'sign-in' => 'Sign in',
        ],
        'reset' => [
            'title' => 'Reset Password',
            'btn_sent_password_reset_link' => 'Sent Password Reset Link'
        ],
        'password' => [
            'title' => 'Set New Password',
            'submit_btn' => 'Change Password'
        ],
    ],

    'failed' => 'These credentials do not match our records.',
    'password' => 'Passwords must be at least eight characters and match the confirmation.',
    'reset' => 'Your password has been reset!',
    'sent' => 'We have e-mailed your password reset link!',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that e-mail address.",
    'new_customers' => 'New Custoners',
    'total_new_customers' => 'Total New Customer',
    'new_customer_label' => 'In Perioud Label',
    'time_period' => 'Time Period',
    
    'comments' => 'Comments',
    'comment' => 'Comment',
    'commented' => 'Commented',
    'order' => 'Order',
    'is_private' => 'Is Private',
    'order_email_address' => 'Order Email Address',
    
    'password-reset-btn' => 'Forgot your password?',
    'password-confirmation' => 'Confirm your password',
    'variation_title' => 'Product Variations',
    'variation_model_title' => 'Save Variation',
    'variation_image' => 'Variation Image',
    'image_title' => 'Product Images',
    'widget_modal_title' => 'Select the Widget',
    'order_invoice' => 'Order Invoice',
    'invoice' => 'Invoice',
    
    'change_order_status' => 'Change Order Status',
    'change_track_code' => 'Change Track code',
    'total-customer' => 'Total Customer',
    'total-order' => 'Total Order',
    'total-revenue' => 'Total Revenue',
    'notification' => [
        'store' => ':attribute Created successfully!',
        'updated' => ':attribute Updated successfully!',
        'delete' => ':attribute delete successfully!',
        'upload' => ':attribute successfully uploaded!',
        'save' => ':attribute save successfully!',
        'approved' => ':attribute approved successfully!',
    ],
    'btn' => [
        'save' => 'Save',
        'cancel' => 'Cancel',
        'create' => 'Create',
        'variation' => 'Make Variation',
        'variation_save' => 'Save Variation',
        'upload' => 'Upload'
    ],
    'tab' => [
        'basic_info' => 'Basic Info',
        'images' => 'Images',
        'property' => 'Property',
        'attribute' => 'Attribute',
        'basic_configuration' => 'Basic Settings',
        'user_configuration' => 'User Settings',
        'payment_configuration' => 'Payment Settings',
        'shipping_configuration' => 'Shipping Settings',
        'tax_configuration' => 'Tax Settings',
    ],
    'admin-user' => [
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'is_super_admin' => 'Is Administrator?',
        'email' => 'Email Address',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'role_id' => 'Role',
        'language' => 'Language',
        'image_file' => 'Admin User Profile Image',
        'index' => [
            'title' => 'Admin User List',
        ],
        'create' => [
            'title' => 'Admin User Create',
        ],
        'edit' => [
            'title' => 'Admin User Edit',
        ],
    ],
    'language' => [
        'name' => 'Name',
        'code' => 'Code',
        'is_default' => 'Is Default',
        'index' => [
            'title' => 'Language List',
        ],
        'create' => [
            'title' => 'Language Create',
        ],
        'edit' => [
            'title' => 'Language Edit',
        ],
    ],
    'role' => [
        'name' => 'Name',
        'description' => 'Description',
        'index' => [
            'title' => 'Role List',
        ],
        'create' => [
            'title' => 'Role Create',
        ],
        'edit' => [
            'title' => 'Role Edit',
        ],
    ],

    'currency' => [
        'name' => 'Name',
        'code' => 'Code',
        'status' => 'Status',
        'conversation_rate' => 'Conversation Rate',
        'symbol' => 'Symbol',
        'title' => 'Currency',
        'index' => [
            'title' => 'Currency List',
        ],
        'create' => [
            'title' => 'Currency Create',
        ],
        'edit' => [
            'title' => 'Currency Edit',
        ],
    ],

    'state' => [
        'name' => 'Name',
        'code' => 'Code',
        'country_id' => 'Country',
        'title' => 'State',
        'index' => [
            'title' => 'State List',
        ],
        'create' => [
            'title' => 'State Create',
        ],
        'edit' => [
            'title' => 'State Edit',
        ],
    ],
    'tax-group' => [
        'name' => 'Name',
        'description' => 'Description',
        'title' => 'Tax Group',
        'index' => [
            'title' => 'Tax Group List',
        ],
        'create' => [
            'title' => 'Tax Group Create',
        ],
        'edit' => [
            'title' => 'Tax Group Edit',
        ],
    ],
    'tax-rate' => [
        'name' => 'Name',
        'description' => 'Description',
        'rate' => 'Tax Rate',
        'country_id' => 'Country',
        'postcode' => 'Postcode',
        'rate_type' => 'Tax rate type',
        'title' => 'Tax Rate',
        'index' => [
            'title' => 'Tax Rate List',
        ],
        'create' => [
            'title' => 'Tax Rate Create',
        ],
        'edit' => [
            'title' => 'Tax Rate Edit',
        ],
    ],

    'configuration' => [
        'title' => 'Configuration',
        'nav' => [
            'basic_setting' => 'Basic Settings',
        ],
        'basic' => [
            'site_name' => 'Site Name',
            'default_currency' => 'Default Currency'
        ],
        'user' => [
            'user_name' => 'Username',
        ],
        'tax' => [
            'tax_percentage' => 'Tax Percentage',
        ],
        'shipping' => [
            'shipping_name' => 'Shipping Name'
        ],
        'payment' => [
            'payment_name' => 'Payment Name'
        ],

    ],
    'header' => [
        'logout' => 'Logout',
    ],
    'admin_menus' => [
        'admin-user' => 'Staff',
        'attribute' => 'Attribute',
        'catalog' => 'Catalog',
        'category' => 'Category',
        'currency' => 'Currency',
        'cms' => 'CMS',
        'menu' => 'Menu',
        'configuration' => 'Configuration',
        'language' => 'Language',
        'order' => 'Order',
        'order-status' => 'Order Status',
        'page' => 'Page',
        'product' => 'Product',
        'property' => 'Product Property',
        'report' => 'Report',
        'new_customer' => 'New Customers',
        'role' => 'Role',
        'system' => 'System',
        'state' => 'State',
        'user' => 'User',
        'user-group' => 'User Group',
        'tax-group' => 'Tax Group',
        'tax-rate' => 'Tax Rate',
        'promo-code' => 'Promotion Code',
        'promotion' => 'Promotion',
    ],
    'permissions' => [
        'dashboard' => 'Dashboard',
        'page' => [
            'title' => 'Page Permissions',
            'list' => 'Page List',
            'create' => 'Create/Store Page',
            'edit' => 'Edit/Update Page',
            'destroy' => 'Destroy Page',
            'show' => 'Show Page',
        ],
        'promotion-code' => [
            'title' => 'Promotion Code',
            'table' => 'Promotion Code Table',
            'edit' => 'Edit/Save Promotion Code',
            'destroy' => 'Destroy Promotion Code'
        ],

        'category' => [
            'title' => 'Category Permissions',
            'list' => 'Category List',
            'create' => 'Create/Store Category',
            'edit' => 'Edit/Update Category',
            'destroy' => 'Destroy Category',
            'show' => 'Show Category',
        ],
        'tax-rate' => [
            'title' => 'Tax Rate Permissions',
            'list' => 'Tax Rate List',
            'create' => 'Create/Store Tax Rate',
            'edit' => 'Edit/Update Tax Rate',
            'destroy' => 'Destroy Tax Rate',
            'show' => 'Show Tax Rate',
        ],
        'language' => [
            'title' => 'Language Permissions',
            'list' => 'Language List',
            'create' => 'Create/Store Language',
            'edit' => 'Edit/Update Language',
            'destroy' => 'Destroy Language',
            'show' => 'Show Language',
        ],
        'product' => [
            'title' => 'Product Permissions',
            'list' => 'Product List',
            'create' => 'Create/Store Product',
            'edit' => 'Edit/Update Product',
            'destroy' => 'Destroy Product',
            'show' => 'Show Product',
        ],
        'attribute' => [
            'title' => 'Attribute Permissions',
            'list' => 'Attribute List',
            'create' => 'Create/Store Attribute',
            'edit' => 'Edit/Update Attribute',
            'destroy' => 'Destroy Attribute',
            'show' => 'Show Attribute',
        ],
        'property' => [
            'title' => 'Property Permissions',
            'list' => 'Property List',
            'create' => 'Create/Store Property',
            'edit' => 'Edit/Update Property',
            'destroy' => 'Destroy Property',
            'show' => 'Show Property',
        ],
        'user' => [
            'title' => 'User Permissions',
            'list' => 'User List',
            'create' => 'Create/Store User',
            'edit' => 'Edit/Update User',
            'destroy' => 'Destroy User',
            'show' => 'Show User',
        ],
        'user_group' => [
            'title' => 'User Group Permissions',
            'list' => 'User Group List',
            'create' => 'Create/Store User Group',
            'edit' => 'Edit/Update User Group',
            'destroy' => 'Destroy User Group',
            'show' => 'Show User Group',
        ],
        'admin_user' => [
            'title' => 'Admin User Permissions',
            'list' => 'Admin User List',
            'create' => 'Create/Store Admin User',
            'edit' => 'Edit/Update Admin User',
            'destroy' => 'Destroy Admin User',
            'show' => 'Show Admin User',
        ],
        'role' => [
            'title' => 'Role Permissions',
            'list' => 'Role List',
            'create' => 'Create/Store Role',
            'edit' => 'Edit/Update Role',
            'destroy' => 'Destroy Role',
            'show' => 'Show Role',
        ],
        'configuration' => [
            'title' => 'Configuration Permissions',
            'view' => 'View Configuration',
            'edit' => 'Save Configuration',
        ],
        'currency' => [
            'title' => 'Site Currency Permissions',
            'list' => 'Site Currency List',
            'create' => 'Create/Store Site Currency',
            'edit' => 'Edit/Update Site Currency',
            'destroy' => 'Destroy Site Currency',
            'show' => 'Show Site Currency',
        ],
        'country' => [
            'title' => 'Country Permissions',
            'list' => 'Country List',
            'create' => 'Create/Store Country',
            'edit' => 'Edit/Update Country',
            'destroy' => 'Destroy Country',
            'show' => 'Show Country',
        ],
        'state' => [
            'title' => 'State Permissions',
            'list' => 'State List',
            'create' => 'Create/Store State',
            'edit' => 'Edit/Update State',
            'destroy' => 'Destroy State',
            'show' => 'Show State',
        ],
        'user-group' => [
            'title' => 'UserGroup Permissions',
            'list' => 'UserGroup List',
            'create' => 'Create/Store UserGroup',
            'edit' => 'Edit/Update UserGroup',
            'destroy' => 'Destroy UserGroup',
            'show' => 'Show UserGroup',
        ],
        'tax-group' => [
            'title' => 'Tax Group Permissions',
            'list' => 'Tax Group List',
            'create' => 'Create/Store Tax Group',
            'edit' => 'Edit/Update Tax Group',
            'destroy' => 'Destroy Tax Group',
            'show' => 'Show Tax Group',
        ],
        'product' => [
            'title' => 'Product Permissions',
            'list' => 'Product List',
            'create' => 'Create/Store Product',
            'edit' => 'Edit/Update Product',
            'destroy' => 'Destroy Product',
            'show' => 'Show Product',
        ],
        'order' => [
            'title' => 'Order Permissions',
            'list' => 'Order List',
            'view' => 'Order View',
            'sent-invoice-by-mail' => 'Order Sent Invoice By Email',
            'change-status' => 'Change Order Status',
            'download-invoice' => 'Download Invoice',
            'save-tracking-code' => 'Save Tracking Code',
            'shipping-label' => 'Shipping Label',
        ],
        'order-status' => [
            'title' => 'Order Status Permissions',
            'list' => 'Order Status List',
            'create' => 'Create/Store Order Status',
            'edit' => 'Edit/Update Order Status',
            'destroy' => 'Destroy Order Status',
            'show' => 'Show Order Status',
        ],
        'currency' => [
            'title' => 'Currency Permissions',
            'list' => 'Currency List',
            'create' => 'Create/Store Currency',
            'edit' => 'Edit/Update Currency',
            'destroy' => 'Destroy Currency',
            'show' => 'Show Currency',
        ],
        'admin-user' => [
            'title' => 'Admin User Permissions',
            'list' => 'Admin User List',
            'create' => 'Create/Store Admin User',
            'edit' => 'Edit/Update Admin User',
            'destroy' => 'Destroy Admin User',
            'show' => 'Show Admin User',
        ],
        'menu' => [
            'title' => 'Menu Permissions',
            'front' => 'Front Menu Index',
            'save' => 'Save Front Menu',
        ],
    ],
    'breadcrumb' => [
        'dashboard' => 'Dashboard',
        'configuration' => 'Configuration',
        'category' => [
            'index' => 'Category',
            'edit' => 'Edit Category',
            'create' => 'Create Category',
        ],
        'promotion-code' => [
            'index' => 'Promotion Code',
            'edit' => 'Edit Promotion Code',
            'create' => 'CreatePromotion Code'
        ],
        'product' => [
            'index' => 'Product',
            'edit' => 'Edit Product',
            'create' => 'Create Product',
        ],
        'order' => [
            'index' => 'Order',
            'show' => 'Show Order',
        ],
        'menu' => [
            'index' => 'Menu',
            'edit' => 'Edit Menu',
            'create' => 'Create Menu',
        ],
        'tax-group' => [
            'index' => 'Tax Group',
            'edit' => 'Edit Tax Group',
            'create' => 'Create Tax Group',
        ],
        'tax-rate' => [
            'index' => 'Tax Rate',
            'edit' => 'Edit Tax Rate',
            'create' => 'Create Tax Rate',
        ],
        'user-group' => [
            'index' => 'User Group',
            'edit' => 'Edit User Group',
            'create' => 'Create User Group',
        ],
        'attribute' => [
            'index' => 'Attribute',
            'edit' => 'Edit Attribute',
            'create' => 'Create Attribute',
        ],
        'property' => [
            'index' => 'Property',
            'edit' => 'Edit Property',
            'create' => 'Create Property',
        ],
        'order-status' => [
            'index' => 'Order Status',
            'edit' => 'Edit Order Status',
            'create' => 'Create Order Status',
        ],
        'currency' => [
            'index' => 'Currency',
            'edit' => 'Edit Currency',
            'create' => 'Create Currency',
        ],
        'state' => [
            'index' => 'State',
            'edit' => 'Edit State',
            'create' => 'Create State',
        ],
        'admin-user' => [
            'index' => 'AdminUser',
            'edit' => 'Edit AdminUser',
            'create' => 'Create AdminUser',
        ],
        'language' => [
            'index' => 'Language',
            'edit' => 'Edit Language',
            'create' => 'Create Language',
        ],
        'page' => [
            'index' => 'Page',
            'edit' => 'Edit Page',
            'create' => 'Create Page',
        ],
        'role' => [
            'index' => 'Role',
            'edit' => 'Edit Role',
            'create' => 'Create Role',
        ],
    ],

];
