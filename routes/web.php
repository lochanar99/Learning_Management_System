 <?php

use Illuminate\Support\Facades\Input;
use App\eEvents;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/Events','EventController@Events');

Route::get('/Add_Extra_Lecture', 'EventController@Add_Extra_Lecture');

Route::get('/NewEvent', 'EventController@NewEvent');

Route::get('/show_current_events',function(){

    $data = App\eEvents::all();

        return view('frontEnd.show_current_events')->with('show_current_events',$data);
}


);

Route::get('/show_current_lecs', function(){

    $data = App\eLecs::all();

        return view('frontEnd.show_current_lecs')->with('show_current_lecs',$data);
});

Route::post('/saveEvent', 'EventController@store');

Route::post('/saveLec','EventController@stores');

Route::get('/aEvents',function(){

    return view('frontEnd.adminEvents');

});

Route::get('/aCurrentEvents',function(){

    $data = App\eEvents::all();

        return view('frontEnd.adminshow_current_events')->with('show_current_events',$data);
});

Route::get('/aCurrentLecs', function(){

    $data = App\eLecs::all();

        return view('frontEnd.adminshow_current_lecs')->with('show_current_lecs',$data);
});

Route::get('/deleteEvent/{Eid}', 'EventController@deleteevent');

Route::get('/deleteLec/{Eid}', 'EventController@deletelec');

Route::post('/search','EventController@search');

Route::get('/updateEvent/{Eid}','EventController@updateEvent');


Route::post('/updateEventView','EventController@updateEventView');

Route::get('/updateLec/{Eid}','EventController@updateLec');

Route::post('/updateLecView','EventController@updateLecView');

Route::get('/markApproval/{Eid}','EventController@Approval');

Route::get('/markApprovals/{Eid}','EventController@Approvals');

Route::get('/markDisApproval/{Eid}','EventController@disApprove');

Route::get('/markDisApprovals/{Eid}','EventController@disApproves');




Route::get('/Lecture_Upload_Lecture', function () {
    return view('Lecture_Upload_Lecture');
});

Route::post('/SaveTask','LectureController@store');

Route::get('/view', function () {
    $data=App\Lecture::all();
    
    return view('Lecture_Module_Page')->with('tasks',$data);
});

Route::get('/index',function(){
return view('index');

});
Route::get('/indexx',function(){
    return view('indexx');
    
    });

Route::get('/lec1st1sem',function(){
    return view('Lecture_1stYear_1stSemester');
    
    });

    Route::get('/lec1st2sem',function(){
        return view('Lecture_1stYear_2ndSemester');
        
        });

        Route::get('/lec2nd1sem',function(){
            return view('Lecture_2ndYear_2ndSemester');
            
            });

            Route::get('/lec2nd2sem',function(){
                return view('Lecture_2ndYear_2ndSemester');
                
                });

                    Route::get('/lecturemanagement',function(){
                        return view('Lecture_Management');
                        
                        });

                        Route::get('/modulehome',function(){
                            return view('Lecture_Module_Home');
                            
                            });

                            Route::get('/deletetask/{id}','LectureController@deletetask');


                           
                           
                           
                           
                           
                           //DILAKSHIKA
                            
                            
                            Route::get('/register', function () {
                                return view('Register');
                            });
                            
                            Route::get('/deleteCourses', function () {
                                return redirect() ->back();
                            });
                            
                            
                            
                            Route::get('/AddCourse', function () {
                                return view('AddCourse');
                            });
                            Route::get('/AddStudent', function () {
                                return view('AddStudent');
                            });
                            Route::get('/Courses', function () {
                                $data=App\candidate1::all();
                                return view('Courses')->with('Courses',$data);
                               
                            });
                            Route::get('/Students', function () {
                                $data=App\candidate2::all();
                                return view('Students')->with('Students',$data);
                            });
                            
                            Route::get('/student', function () {
                                return view('student');
                            });
                            
                            Route::get('/updateCourses', function () {
                                return view('updateCourses');
                            });
                            
                            
                            
                            Route::get('/course', function () {
                                return view('course');
                            });
                            Route::get('/index1', function () {
                                return view('index1');
                            });
                            
                            Route::get('/deleteCourses/{id}','Pagecontroller@deleteCourses');
                            Route::get('/deleteStudents/{id}','Pagecontroller@deleteStudents');
                            
                            
                            Route::post('/saveAddCourse','Pagecontroller@store1');
                            Route::post('/saveAddStudent','Pagecontroller@store2');
                            Route::post('/saveRegister','Pagecontroller@store3');
                            Route::delete('/deleteCourses/{id}', 'Pagecontroller@deleteCourses');
                            Route::delete('/deleteStudents/{id}', 'Pagecontroller@deleteStudents');
                            
                            
                            
                            //Route::get('/updateCourses/{Course_ID}','Pagecontroller@updateCourses');





                            Route::get('/exam', function () {
                                return view('exams');
                            });
                            Route::get('/gpa', function () {
                                return view('GPA');
                            });
                            Route::get('/result', function () {
                                $data=App\Result::all();
                                return view('results')->with('results',$data);
                            });
                            Route::get('/notice', function () {
                                $data=App\Enotice::all();
                                
                                    return view('notices')->with('enotices', $data);
                                });
                            Route::get('/report', function () {
                                return view('reports');
                            });
                            Route::get('/assignment', function () {
                                $data=App\Assignment::all();
                                return view('assignments')->with('assignments',$data);
                            });
                            
                            //end of the lecturer routes......
                            //these are the student routes
                            
                            Route::get('/sexam', function () {
                                return view('examsStu');
                            });
                            Route::get('/sgpa', function () {
                                return view('gpaStu');
                            });
                            Route::get('/sresult', function () {
                                $data=App\Result::all();
                                return view('resultsStu')->with('results',$data);
                            });
                            Route::get('/snotice', function () {
                                $data=App\Enotice::all();
                                return view('noticesStu')->with('enotices',$data);
                            });
                            Route::get('/sassignment', function () {
                                $data=App\Assignment::all();
                                return view('assignmentsStu')->with('assignments',$data);
                            });
                            
                            //end of the student routes......
                            //here begins the routes for the controllers
                            
                            //result
                            Route::post('/saveResult' , 'resultController@store');
                            
                            Route::get('/deleteResult/{Rid}', 'resultController@deleteResult');
                            Route::delete('/deleteResult/{Rid}', 'resultController@deleteResult');
                            
                            
                            Route::get('/updateResult/{Rid}', 'resultController@updateResultview');
                            
                            //assignment
                            Route::post('/saveAssignment','assignmentController@store');
                            
                            /*Route::get('/deleteAssignment/{assignment_id}', 'examController@deleteAssignment');
                            
                            Route::post('/updateAssignment/{assignment_id}', 'examController@updateAssignmentview');*/

                            //notice
Route::post('/saveNotice', 'EnoticeController@store');

Route::get('/deleteNotice/{Nid}', 'EnoticeController@deleteNotice');

Route::get('/updateNotice/{Ncontent}', 'EnoticeController@updateNoticeview');


Route::get('/notice', function () {
    $data=App\Enotice::all();
    
        return view('notices')->with('enotices', $data);
    });


                            Route::get('/feedback', function () {
                                return view('feedback');
                            });
                            
                            Route::post('/action_page.php','TaskController@store');
                            
                            Route::get('/viewfeedback', function () {
                                $data=App\feedback::all();
                                return view('viewfeedback')->with('feedback',$data);
                            });
                            
                            Route::get('/registration', function () {
                                return view('registration');
                            });
                            
                            Route::post('/save.php','Page1Controller@store1');
                            
                            Route::get('/profile', function () {
                                $data=App\lecturer::all();
                                return view('profile')->with('registration',$data);
                            });
                            
                            Route::get('/login', function () {
                                return view('login');
                            });

                            Route::get('/changepassword', function () {
                                return view('changepassword');
                            });

                            Route::get('/updateprofile', function () {
                                return view('updateprofile');
                            });

                            
                            Route::get('/lechall', function () {
                                return view('lecture_hall');
                               });
                            
                            
                            
                            
                            
                            Route::get('/inventry', function () {
                             return view('inventry');
                            });
                            
                            Route::get('/stationeryItem', function(){
                                return view('stationery');
                            });
                            
                            
                            Route::get('/labItem', function(){
                                return view('Lab_Item');
                            });
                            
                            Route::get('/lechallItem', function(){
                                return view('Lecture_hall_Item_View');
                            });
                            
                            Route::get('/labItemview', function(){
                                return view('Lab_Item_View');
                            });
                            
                            Route::get('/Stationery', function(){
                                return view('stationery');
                            });
                            
                            Route::get('/Stationeryview', function(){
                                return view('Stationery_Item_View');
                            });
                            
                            Route::post('/saveDetails', 'TaskController@store');
                            Route::post('/SAVEDETAILS', 'TaskController@store1');
                            Route::post('/SAVEdetails', 'TaskController@store2');
                            Route::post('/deleteTask/{id}', 'TaskController@deletetaskx');
                            
                            
                            
                            Route::get('/AdminCarrierGuide', 'AdminController@AdminCarrierGuide');
                            Route::get('/AdminDigLibandStudAff', 'AdminController@AdminDigLibandStudAff');
                            Route::get('/AdminGeneralNotices', 'AdminController@AdminGeneralNotices');
                            Route::get('/AdminInstituteManuals', 'AdminController@AdminInstituteManuals');
                            Route::get('/AdminITServices', 'AdminController@AdminITServices');
                            Route::get('/AdminRegisterationList', 'AdminController@AdminRegisterationList');
                            Route::get('/AdminRequestForms', 'AdminController@AdminRequestForms');
                            Route::get('/AdminStudentAffairs', 'AdminController@AdminStudentAffairs');
                            
                            /*
                            User Side 
                            */
                            Route::get('/CarreirGuides', 'UserController@CarreirGuides');
                            Route::get('/DigitalLibrary', 'UserController@DigitalLibrary');
                            Route::get('/DigLibandStudAff', 'UserController@DigLibandStudAff');
                            Route::get('/GeneralNotices', 'UserController@GeneralNotices');
                            Route::get('/InstituteManuals', 'UserController@InstituteManuals');
                            Route::get('/ITServices', 'UserController@ITServices');
                            Route::get('/RegistrationLists', 'UserController@RegistrationLists');
                            Route::get('/RequestForms', 'UserController@RequestForms');
                            Route::get('/StudentAffairs', 'UserController@StudentAffairs');
                            
                            /*
                            Form User Side 
                            */
                            Route::get('/Certificate', 'FormController@Certificate');
                            Route::get('/Oficial', 'FormController@Oficial');
                            Route::get('/Postpone', 'FormController@Postpone');
                            Route::get('/Prorata', 'FormController@Prorata');
                            Route::get('/ResultsReq', 'FormController@ResultsReq');
                            Route::get('/Transfer', 'FormController@Transfer');
                            
                            
                            
                            Route::get('/AdminDigitalLib',function(){
                                $data=App\Book::all();
                                return view('AdminDigitalLib')->with('books',$data);
                            });
                            
                            Route::post('/AdminDigitalLib', 'AdminController@store');
                            
                            Route::get('/AdminDigitalLib/{$Book->BookID}', 'AdminController@deleteBook');
                            
                            
                            Route::get('/AdminCarrierGuide',function(){
                                $data=App\Carrier::all();
                                return view('AdminCarrierGuide')->with('carriers',$data);
                            });
                            
                            Route::post('/AdminCarrierGuide', 'AdminController@guide');
                            
                            Route::get('/AdminCarrierGuide/{$Carrier->CarID}', 'AdminController@deleteCarrier');