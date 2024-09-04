<?php


use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){

    return  inertia('Welcome');

});


Route::get('/about',function(){

    return inertia('About');

});

Route::get('/contact', function(){
    return inertia('Contact');
});

Route::post('/contact', function(Request $request){
    $newcontact = new Contact();
    $newcontact->customer_email    = $request->customerEmail;
    $newcontact->customer_message  = $request->customerMessage;
    $newcontact->save();

    return redirect(route('message-received'));

});



Route::get('/thank-you-for-your-message', function(){

    return inertia('Message');

})->name('message-received');



Route::get('/blog',[\App\Http\Controllers\BlogController::class,'create'])->name('blog.form');
Route::post('/blog',[\App\Http\Controllers\BlogController::class,'store'])->name('blog.form.post');

Route::resource('tags', \App\Http\Controllers\TagController::class);

















require __DIR__.'/auth.php';
