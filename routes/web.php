<?php

use App\Livewire\AnnouncementsPage;
use App\Livewire\AttendancePage;
use App\Livewire\BenefitsDeductionsPage;
use App\Livewire\DashboardPage;
use App\Livewire\HrFormsPage;
use App\Livewire\IpcrPage;
use App\Livewire\LeaveManagementPage;
use App\Livewire\MyProfilePage;
use App\Livewire\OpcrPage;
use App\Livewire\PermittoStudyPage;
use App\Livewire\ScholarshipPage;
use App\Livewire\SeminarTrainingPage;
use App\Livewire\WorkRequestPage;
use App\Livewire\AdminView;
use App\Livewire\AdminIPCRPage;
use App\Livewire\AdminPermittoStudyPage;
use App\Livewire\AdminScholarshipPage;
use App\Livewire\AdminSeminartrainingPage;
use App\Livewire\AdminComputerAidedTraining;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return redirect()->route('my_profile.index');
});

Route::middleware([])->group(function () {
    // Change the 'dashboard' route to redirect to 'emp_dashboard'
    Route::get('/dashboard', function () {
        return redirect()->route('my_profile.index');
    })->name('my_profile.index');

    Route::get('/emp_dashboard', DashboardPage::class)->name('dashboard.index');
    Route::get('/emp_my_profile', MyProfilePage::class)->name('my_profile.index');
    Route::get('/emp_attendance', AttendancePage::class)->name('attendance.index');
    Route::get('/emp_benefits_deduction', BenefitsDeductionsPage::class)->name('benefitsdeductions.index');
    Route::get('/emp_announcements', AnnouncementsPage::class)->name('announcements.index');
    Route::get('/emp_work_request', WorkRequestPage::class)->name('work_request.index');
    Route::get('/emp_leave_management', LeaveManagementPage::class)->name('leave_management.index');
    Route::get('/emp_hr_forms', HrFormsPage::class)->name('hrforms.index');
    Route::get('/emp_ipcr', IpcrPage::class)->name('ipcr.index');
    Route::get('/emp_opcr', OpcrPage::class)->name('opcr.index');
    Route::get('/emp_permit_to_study', PermittoStudyPage::class)->name('permittostudy.index');
    Route::get('/emp_scholarship', ScholarshipPage::class)->name('scholarship.index');
    Route::get('/emp_seminars_training', SeminarTrainingPage::class)->name('seminartraining.index');
    Route::get('/admin_myprofile', AdminView::class)->name('adminView.index');
    Route::get('/admin_ipcr', AdminIPCRPage::class)->name('adminIPCR.index');
    Route::get('/admin_permittostudy', AdminPermittoStudyPage::class)->name('adminPermittoStudy.index');
    Route::get('/admin_scholarship', AdminScholarshipPage::class)->name('adminScholarship.index');
    Route::get('/admin_seminarsandtraining', AdminSeminartrainingPage::class)->name('adminSeminarsandTraining.index');
    Route::get('/admin_computeraidedtraining', AdminComputerAidedTraining::class)->name('adminComputerAidedTraining.index');
});
