<?php

// Admin
Breadcrumbs::for('admin.home', function ($trail) {
  $trail->push('Admin', route('admin.home'));
});

// Home > Messages
Breadcrumbs::for('messages.index', function ($trail) {
  $trail->parent('admin.home');
  $trail->push('Messages', route('messages.index'));
});
