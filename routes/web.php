<?php

use App\Livewire\Application\Dashboard\MainDashboard;
use App\Livewire\Application\Member\Form\FormMemberView;
use App\Livewire\Application\Member\MemberView;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', MainDashboard::class)->name('dashboard');
    Route::get('/member', MemberView::class)->name('member');
    Route::get('/member/form/{member?}', FormMemberView::class)->name('member.form');
});
