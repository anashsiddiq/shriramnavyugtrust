<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\UserAdmin\MembershipController;
use App\Http\Controllers\UserAdmin\MembershipStatusController;
use App\Http\Controllers\UserAdmin\AppointmentLetterController;
use App\Http\Controllers\UserAdmin\CertificateController;
use App\Http\Controllers\UserAdmin\ProfileController;
use App\Http\Controllers\UserAdmin\AccountController;
use App\Http\Controllers\UserAdmin\DonateformController;
use App\Http\Controllers\UserAdmin\MembershipPaymentController;
use App\Http\Controllers\UserAdmin\DonationPaymentController;
use App\Http\Controllers\Admindash\NewMembershipController;
use App\Http\Controllers\Admindash\ActiveMembershipController;
use App\Http\Controllers\Admindash\GenertateCertificateController;
use App\Http\Controllers\Admindash\AdminActiveCertificateController;
use App\Http\Controllers\Admindash\SendUserController;
use App\Http\Controllers\Admindash\SendAllUsersController;
use App\Http\Controllers\Admindash\PreviousNoticeController;
use App\Http\Controllers\Admindash\ActiveUserController;
use App\Http\Controllers\Admindash\BlockUserController;
use App\Http\Controllers\Admindash\AddManagerController;
use App\Http\Controllers\Admindash\ActiveManageController;
use App\Http\Controllers\Admindash\BlockManageController;
use App\Http\Controllers\Admindash\DonationController;
use App\Http\Controllers\Admindash\ReceiptController;
use App\Http\Controllers\Admindash\GenerateFormCertificateController;
use App\Http\Controllers\Admindash\CertifDataController;
use App\Http\Controllers\Admindash\VisitorDonationController;
use App\Http\Controllers\Admindash\MembershipReceiptController;
use App\Http\Controllers\Admindash\UserDonationReceiptController;
use App\Http\Controllers\Admindash\VisitorDonationReceiptController;
use App\Http\Controllers\Admindash\CashDonationReceiptController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/Aboutus', function () {
    return view('Aboutus');
})->name('Aboutus');

Route::get('/Ourteam', function () {
    return view('Ourteam');
})->name('Ourteam');

Route::get('/MissonandVison', function () {
    return view('MissonandVison');
})->name('MissonandVison');

Route::get('/OurManagement', function () {
    return view('OurManagement');
})->name('OurManagement');

Route::get('/Photogallary', function () {
    return view('Photogallary');
})->name('Photogallary');


Route::get('/Achievements', function () {
    return view('Achievements');
})->name('Achievements');

Route::get('/certificate', function () {
    return view('Certificate');
})->name('certificate');


Route::get('/OurProjects', function () {
    return view('OurProjects');
})->name('OurProjects');

Route::get('/pressmedia', function () {
    return view('pressmedia');
})->name('pressmedia');

Route::get('/Termandcondition', function () {
    return view('Termandcondition');
})->name('Termandcondition');

Route::get('/RefundReturn', function () {
    return view('RefundReturn');
})->name('RefundReturn');

Route::get('/PrivercyAndPolicy', function () {
    return view('PrivercyAndPolicy');
})->name('PrivercyAndPolicy');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

Route::POST('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('adminlogin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('adminlogin', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('adminlogout', [AdminController::class, 'logout'])->name('admin.logout');


Route::get('/donate', [DonateController::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonateController::class, 'submitForm'])->name('donate.submit');


Route::get('register', [RegisterController::class, 'showForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/apply-membership', [MembershipController::class, 'index'])->name('apply.membership');
Route::get('/membership-status', [MembershipStatusController::class, 'index'])->name('membership.status');
Route::get('/appointment-letter', [AppointmentLetterController::class, 'index'])->name('appointment.letter');
Route::get('/our-certificate', [CertificateController::class, 'index'])->name('certificate.index');
Route::get('/update-profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/update-profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/donate-now', [DonateformController::class, 'index'])->name('donate.now');
Route::get('/donate-submit', [DonateformController::class, 'submit'])->name('donate.submit');
Route::get('/membership-payment', [MembershipPaymentController::class, 'index'])->name('membership.payment');
Route::get('/donation-payment-status', [DonationPaymentController::class, 'index'])->name('donation.payment.status');

Route::get('/new-membership', [NewMembershipController::class, 'create'])->name('admin.newmembership');
Route::get('/active-membership', [ActiveMembershipController::class, 'index'])->name('admin.activemembership');
Route::get('/generate-certificate', [GenertateCertificateController::class, 'generate'])->name('admin.generatecertificate');
Route::get('/active-certificate', [AdminActiveCertificateController::class, 'index'])->name('admin.activecertificate');
Route::get('/send-single-user', [SendUserController::class, 'send'])->name('admin.sendsingleuser');
Route::get('/send-all-users', [SendAllUsersController::class, 'send'])->name('admin.sendallusers');
Route::get('/previous-notice', [PreviousNoticeController::class, 'index'])->name('admin.previousnotice');
Route::get('/active-users', [ActiveUserController::class, 'index'])->name('admin.activeusers');
Route::get('block-users', [BlockUserController::class, 'index'])->name('admin.blockusers');
Route::get('/add-manager', [AddManagerController::class, 'create'])->name('admin.addmanager');
Route::get('/active-managers', [ActiveManageController::class, 'index'])->name('admin.activemanagers');
Route::get('/block-managers', [BlockManageController::class, 'blocked'])->name('admin.blockmanagers');
Route::get('/receive-donations', [DonationController::class, 'index'])->name('admin.receivedonations');
Route::get('/receipts', [ReceiptController::class, 'index'])->name('admin.receipts');
Route::get('/generate-certificate', [GenerateFormCertificateController::class, 'create'])->name('admin.generatecertificate');
Route::get('/certifi', [CertifDataController::class, 'index'])->name('admin.certifications');
Route::get('/visitor-donation', [VisitorDonationController::class, 'index'])->name('admin.visitordonation');
Route::get('/membership-receipt', [MembershipReceiptController::class, 'index'])->name('admin.membershipreceipt');
Route::get('/user-donation-receipt', [UserDonationReceiptController::class, 'index'])->name('admin.userdonationreceipt');
Route::get('/visitor-donation-receipt', [VisitorDonationReceiptController::class, 'index'])->name('admin.visitordonationreceipt');
Route::get('/cash-donation-receipt', [CashDonationReceiptController::class, 'index'])->name('admin.cashdonationreceipt');





