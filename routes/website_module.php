<?php

use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleOneController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleTwoController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleThreeController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleFourController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleFiveController;
use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function () {
// Route of WebsiteModuleOneController
Route::get('/slideshow/list', [WebsiteModuleOneController::class, 'slideShow'])->name('slide_show');
Route::get('/add_slide/show', [WebsiteModuleOneController::class, 'addSlideShow'])->name('add_slide_show');
Route::post('/add_slide/input', [WebsiteModuleOneController::class, 'inputSlideShow'])->name('inputSlideShow');
Route::get('/add_slide/view/{id}', [WebsiteModuleOneController::class, 'slide_show_view'])->name('slide_show_view');
Route::get('/add_slide/edit/{id}', [WebsiteModuleOneController::class, 'slide_show_edit'])->name('slide_show_edit');
Route::post('/add_slide/update', [WebsiteModuleOneController::class, 'updateSlideShow'])->name('updateSlideShow');
Route::post('/add_slide/delete', [WebsiteModuleOneController::class, 'slideShowdelete'])->name('slideshow.delete');




//massage corner start

Route::get('/message/corner', [WebsiteModuleOneController::class, 'messageCorner'])->name('message_corner');
Route::get('/add/message', [WebsiteModuleOneController::class, 'addMessage'])->name('add_message');
Route::post('/input/message', [WebsiteModuleOneController::class, 'InputMessage'])->name('input.massagecorner');
Route::get('/view/message/{id}', [WebsiteModuleOneController::class, 'ViewMessage'])->name('message_view');
Route::get('/edit/message/{id}', [WebsiteModuleOneController::class, 'EditMessage'])->name('updatemassageCorner');
Route::post('/update/message', [WebsiteModuleOneController::class, 'Updatemassagecorner'])->name('update.massagecorner');
Route::post('/delete/message', [WebsiteModuleOneController::class, 'massagecornerDelete'])->name('delete.massagecorner');



// manu part start
Route::get('/manage/menu', [WebsiteModuleOneController::class, 'manageMenu'])->name('manage_menu');
Route::get('/add/menu', [WebsiteModuleOneController::class, 'addMenu'])->name('add_menu');
Route::post('/input/menu', [WebsiteModuleOneController::class, 'Inputmanu'])->name('input.manu');
Route::get('/View/menu/{id}', [WebsiteModuleOneController::class, 'ViewManu'])->name('view.manu');
Route::get('/Edit/menu/{id}', [WebsiteModuleOneController::class, 'EditManu'])->name('edit.manu');
Route::post('/Update/menu/', [WebsiteModuleOneController::class, 'UpdateManu'])->name('update.manu');
Route::post('/delete/menu/', [WebsiteModuleOneController::class, 'DeleteManu'])->name('delete.manu');



//manage content part start
Route::get('/manage/content', [WebsiteModuleTwoController::class, 'manageContent'])->name('manage_content');
Route::get('/add/content', [WebsiteModuleTwoController::class, 'addContent'])->name('add_content');
Route::post('/input/content', [WebsiteModuleTwoController::class, 'InputContent'])->name('Input.content');
Route::post('/delete/content', [WebsiteModuleTwoController::class, 'DeleteContent'])->name('content.delete');
Route::get('/Edit/content/{id}', [WebsiteModuleTwoController::class, 'EditContent'])->name('content.edit');
Route::post('/update/content', [WebsiteModuleTwoController::class, 'UpdateContent'])->name('Update.content');
Route::get('/View/content/{id}', [WebsiteModuleTwoController::class, 'ViewContent'])->name('content.view');

//manage About Page content part start
Route::get('/manage/about/content', [WebsiteModuleTwoController::class, 'AboutmanageContent'])->name('manage.about_content');
Route::get('/add/about/content', [WebsiteModuleTwoController::class, 'AboutaddContent'])->name('add.about_content');
Route::post('/input/about/content', [WebsiteModuleTwoController::class, 'AboutInputContent'])->name('Input.about.content');
Route::post('/delete/about/content', [WebsiteModuleTwoController::class, 'AboutDeleteContent'])->name('content.about.delete');
Route::get('/Edit/about/content/{id}', [WebsiteModuleTwoController::class, 'AboutEditContent'])->name('content.about.edit');
Route::post('/update/about/content', [WebsiteModuleTwoController::class, 'AboutUpdateContent'])->name('Update.about.content');




//braking news content
Route::get('/breaking/news', [WebsiteModuleTwoController::class, 'breakingNews'])->name('breaking_news');
Route::get('/add_breaking/news', [WebsiteModuleTwoController::class, 'addBreakingNews'])->name('add_braking_news');
Route::post('/Inputbreaking/news', [WebsiteModuleTwoController::class, 'Inputbraking'])->name('input.braking');
Route::post('/Deletebreaking/news', [WebsiteModuleTwoController::class, 'Deletebraking'])->name('delete.braking');
Route::get('/Editbreaking/news/{id}', [WebsiteModuleTwoController::class, 'Editbraking'])->name('breaking.edit');
Route::get('/Viewbreaking/news/{id}', [WebsiteModuleTwoController::class, 'Viewbraking'])->name('breaking.view');
Route::post('/Updatebreaking/news', [WebsiteModuleTwoController::class, 'Updatebraking'])->name('update.braking');




Route::get('/manage/album', [WebsiteModuleTwoController::class, 'manageAlbum'])->name('manage_album');
Route::get('/add/album', [WebsiteModuleTwoController::class, 'addAlbum'])->name('add_album');
Route::get('/Edit/album/{id}', [WebsiteModuleTwoController::class, 'EditAlbum'])->name('album.edit');
Route::post('/Insert/album', [WebsiteModuleTwoController::class, 'InsertAlbam'])->name('insert.albem');
Route::post('/update/album', [WebsiteModuleTwoController::class, 'UpdateAlbam'])->name('update.albem');
Route::post('/delete/album', [WebsiteModuleTwoController::class, 'DeleteAlbam'])->name('delete.albem');
Route::get('/show/album/{id}', [WebsiteModuleTwoController::class, 'showAlbam'])->name('show.albem');
//Route of WebsiteModuleTwoController
// Gallar part staaaaaart
Route::get('/manage/gallery', [WebsiteModuleThreeController::class, 'manageGallery'])->name('manage_gallery');
Route::get('/add/gallery', [WebsiteModuleThreeController::class, 'addGallery'])->name('add_gallery');
Route::post('/input/gallery', [WebsiteModuleThreeController::class, 'inputGallery'])->name('input.gallary');
Route::post('/delete/gallery', [WebsiteModuleThreeController::class, 'DeleteGallery'])->name('delete.gallery');
Route::get('/edit/gallery/{id}', [WebsiteModuleThreeController::class, 'editGallery'])->name('gallery.edit');
Route::get('/view/gallery/{id}', [WebsiteModuleThreeController::class, 'viewGallery'])->name('gallery.view');
Route::post('/Update/gallery', [WebsiteModuleThreeController::class, 'UpdateGallery'])->name('update.gallary');


//newa part starts

Route::get('/add/news', [WebsiteModuleThreeController::class, 'addNews'])->name('add_news');
Route::get('/manage/news', [WebsiteModuleThreeController::class, 'manageNews'])->name('manage_news');
Route::post('/insert/news', [WebsiteModuleThreeController::class, 'inputNews'])->name('input.news');
Route::get('/edit/news/{id}', [WebsiteModuleThreeController::class, 'EditNews'])->name('news.edit');
Route::get('/view/news/{id}', [WebsiteModuleThreeController::class, 'ViewNews'])->name('news.view');
Route::post('/update/news', [WebsiteModuleThreeController::class, 'UpdateNews'])->name('update.news');
Route::post('/delete/news', [WebsiteModuleThreeController::class, 'Deletenews'])->name('delete.news');

// event part start
Route::get('/manage/event', [WebsiteModuleThreeController::class, 'manageEvent'])->name('manage_event');
Route::get('/add/event', [WebsiteModuleThreeController::class, 'addEvent'])->name('add_event');
Route::post('/input/event', [WebsiteModuleThreeController::class, 'InputEvent'])->name('input.event');
Route::post('/update/event', [WebsiteModuleThreeController::class, 'UpdateEvent'])->name('Update.event');
Route::post('/delete/event', [WebsiteModuleThreeController::class, 'DeleteEvent'])->name('delete.event');
Route::get('/edit/event/{id}', [WebsiteModuleThreeController::class, 'EditEvent'])->name('event.edit');
Route::get('/view/event/{id}', [WebsiteModuleThreeController::class, 'viewEvent'])->name('view.event');

//Route of WebsiteModuleThreeController
// add section


//Route of WebsiteModuleFourController
//manage notice controller
Route::get('/manage/notice', [WebsiteModuleFourController::class, 'manageNotice'])->name('manage_notice');
Route::get('/add/notice', [WebsiteModuleFourController::class, 'addNotice'])->name('add_notice');
Route::get('/Edit/notice/{id}', [WebsiteModuleFourController::class, 'EditNotice'])->name('notice.edit');
Route::get('/View/notice/{id}', [WebsiteModuleFourController::class, 'ViewNotice'])->name('notice.view');
Route::post('/Insert/notice', [WebsiteModuleFourController::class, 'InsertNotice'])->name('insert.notice');
Route::post('/Update/notice', [WebsiteModuleFourController::class, 'UpdateNotice'])->name('update.notice');
Route::post('/Delete/notice', [WebsiteModuleFourController::class, 'DeleteNotice'])->name('delete.notice');

//Route of WebsiteModuleFourController
//manage notice controller
Route::get('/manage/manageEr', [WebsiteModuleFourController::class, 'manageEr'])->name('manage_Er');
Route::get('/add/examroutine', [WebsiteModuleFourController::class, 'addExamRoutine'])->name('add_examroutine');
Route::get('/Edit/Er/{id}', [WebsiteModuleFourController::class, 'EditER'])->name('routineE.edit');
Route::post('/Insert/Routine', [WebsiteModuleFourController::class, 'insertER'])->name('insert.Examroutine');
Route::post('/Update/ER', [WebsiteModuleFourController::class, 'UpdateEr'])->name('update.Examroutine');
Route::post('/Delete/er', [WebsiteModuleFourController::class, 'DeleteER'])->name('delete.DeleteER');



//careear part start

Route::get('/add/career', [WebsiteModuleFourController::class, 'addCareer'])->name('add_career');
Route::get('/manage/career', [WebsiteModuleFourController::class, 'manageCareer'])->name('manage_career');
Route::get('/edit/career/{id}', [WebsiteModuleFourController::class, 'EditCareer'])->name('career.edit');
Route::get('/view/career/{id}', [WebsiteModuleFourController::class, 'ViewCareer'])->name('career.view');
Route::post('/Input/career', [WebsiteModuleFourController::class, 'InputCareer'])->name('input.carearr');
Route::post('/delete/career', [WebsiteModuleFourController::class, 'DeleteCareer'])->name('delete.career');
Route::post('/update/career', [WebsiteModuleFourController::class, 'UpdateCareer'])->name('update.carearr');





// add section
Route::get('/board/result', [WebsiteModuleFourController::class, 'boardResult'])->name('board_result');
Route::get('/add_board/result', [WebsiteModuleFourController::class, 'addBoardResult'])->name('add_board_result');
Route::get('/edit/result/{id}', [WebsiteModuleFourController::class, 'EditResult'])->name('board_result_edit');
Route::get('/view/result/{id}', [WebsiteModuleFourController::class, 'ViewResult'])->name('board_result_view');
Route::post('/input/result', [WebsiteModuleFourController::class, 'InputResult'])->name('input.bresult');
Route::post('/update/result', [WebsiteModuleFourController::class, 'UpdateResult'])->name('update.bresult');
Route::post('/delete/result', [WebsiteModuleFourController::class, 'DeleteBoard'])->name('delete.bresult');

//manege link statrt

Route::get('/add/link', [WebsiteModuleFiveController::class, 'addLink'])->name('add_link');
Route::get('/manage/link', [WebsiteModuleFiveController::class, 'manageLink'])->name('manage_link');
Route::get('/Edit/link/{id}', [WebsiteModuleFiveController::class, 'EditLink'])->name('link_edit');
Route::get('/view/link/{id}', [WebsiteModuleFiveController::class, 'viewLink'])->name('link_view');
Route::post('/inputs/link', [WebsiteModuleFiveController::class, 'InputLink'])->name('input.linkmanage');
Route::post('/Delete/link', [WebsiteModuleFiveController::class, 'DeleteLink'])->name('delete.uselink');
Route::post('/Update/link', [WebsiteModuleFiveController::class, 'UpdateLink'])->name('update.linkmanage');

//facility part starts here
Route::get('/facility', [WebsiteModuleFiveController::class, 'index'])->name('facility');
Route::get('/facility/add', [WebsiteModuleFiveController::class, 'AddFacility'])->name('facility.add');
Route::get('/facility/edit/{id}', [WebsiteModuleFiveController::class, 'EditFacility'])->name('facility.edit');
Route::post('/facility/input', [WebsiteModuleFiveController::class, 'InputFacility'])->name('input.facility');
Route::post('/facility/delete', [WebsiteModuleFiveController::class, 'deleteFacility'])->name('delete.facility');
Route::post('/facility/update', [WebsiteModuleFiveController::class, 'UpdateFacility'])->name('update.facility');

//teachers content
Route::get('/t_content', [WebsiteModuleFiveController::class, 'TeachContIndex'])->name('TeachContIndex');
Route::get('/t_content/add', [WebsiteModuleFiveController::class, 'TeachContadd'])->name('TContent.add');
Route::get('/t_content/edit/{id}', [WebsiteModuleFiveController::class, 'TeachContEdit'])->name('t_content.edit');
Route::post('/t_content/input', [WebsiteModuleFiveController::class, 'TeachContinput'])->name('input.contentTeacher');
Route::post('/t_content/update', [WebsiteModuleFiveController::class, 'TeachContUpdate'])->name('update.contentTeacher');
Route::post('/t_content/delete', [WebsiteModuleFiveController::class, 'deleteTeachercontent'])->name('delete.contentTeacher');

//Route of WebsiteModuleFiveController
// add section
Route::get('/manage/social_media', [WebsiteModuleFiveController::class, 'manageSocialMedia'])->name('manage_social_media');
Route::get('/add/social_media', [WebsiteModuleFiveController::class, 'addSocialMedia'])->name('add_social_media');
Route::get('/edit/social_media/{id}', [WebsiteModuleFiveController::class, 'EditSocialMedia'])->name('social_edit');
Route::get('/view/social_media/{id}', [WebsiteModuleFiveController::class, 'ViewSocialMedia'])->name('social_view');
Route::post('/input/social_media', [WebsiteModuleFiveController::class, 'InputSocialMedia'])->name('input.social');
Route::post('/update/social_media', [WebsiteModuleFiveController::class, 'UpdateSocialMedia'])->name('update.social');
Route::post('/delete/social_media', [WebsiteModuleFiveController::class, 'DeleteSocialMedia'])->name('delete.socialm');



});
?>



