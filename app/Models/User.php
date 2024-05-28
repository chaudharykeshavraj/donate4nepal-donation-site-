<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Carbon\Carbon;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function saveContact($datas){
        // dd($datas);
        $sql = DB::table('contact')->insertGetId([
            'fullname' => isset($datas['name'])?$datas['name']:null,
            'email' => isset($datas['email'])?$datas['email']:null,
            'subject' => isset($datas['subject'])?$datas['subject']:null,
            'message' => isset($datas['message'])?$datas['message']:null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return $sql;
    }


    // public function cmsContentData($constant){
    //     $sql = DB::table('cms')->where('constant',$constant)->first();
    //     return $sql;
    // }


    // public function whatwedoAll(){
    //     $sql = DB::table('whatwedo')->get();
    //     return $sql;
    // }

    // public function getinvolvedAll($limit){
    //     $sql = DB::table('whatwedo')->get();
    //     return $sql;
    // }
    // public function shopAll($limit){
    //     $sql = DB::table('shop')->get();
    //     return $sql;
    // }






    // public function cmsSelected($constant){
    //     $sql = DB::table('cms')->where('constant',$constant)->first();
    //     return $sql;
    // }

    // public function cmsCount(){
    //     $sql = DB::table('cms')->count();
    //     return $sql;
    // }
    // public function cmsListAll($limit){
    //     $sql = DB::table('cms')->get();
    //     return $sql;
    // }
    
    // public function cmsSel($id){
    //     $sql = DB::table('cms')->where('id',$id)->first();
    //     return $sql;
    // }

    // public function UpdateCms($datas,$id){
    //     $sql = DB::table('cms')->update([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'desc' => isset($datas['desc'])?$datas['desc']:null,
    //         'updated_at' => now()
    //     ]);
    //     return $sql;
    // }





    // public function whatwedoCount(){
    //     $sql = DB::table('whatwedo')->count();
    //     return $sql;
    // }
    // public function whatwedoListAll($limit){
    //     $sql = DB::table('whatwedo')->get();
    //     return $sql;
    // }
    // public function whatwedoSel($id){
    //     $sql = DB::table('whatwedo')->where('id',$id)->first();
    //     return $sql;
    // }

    // public function Addwhatwedo($datas){      
    //     $sql = DB::table('whatwedo')->insert([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]); 
    //     return $sql;
    // } 

    // public function Updatewhatwedo($datas,$id){
    //     $sql = DB::table('whatwedo')->where('id',$id)->update([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     return $sql;
    // }

    // public function Deletewhatwedo($id)
    // {
    //     $sql = DB::table('whatwedo')->where('id', $id)->delete();
    //     return $sql;
    // }





    // public function meetingsCount(){
    //     $sql = DB::table('meetings')->count();
    //     return $sql;
    // }
    // public function meetingsListAll($limit){
    //     $sql = DB::table('meetings')->get();
    //     return $sql;
    // }
    // public function meetingsSel($id){
    //     $sql = DB::table('meetings')->where('id',$id)->first();
    //     return $sql;
    // }

    // public function AddMeetings($datas){      
    //     $sql = DB::table('meetings')->insert([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'image' => isset($datas['image'])?$datas['image']:null,
    //         'desc' => isset($datas['desc'])?$datas['desc']:null,
    //         'price' => isset($datas['price'])?$datas['price']:null,
    //         'meeting_date' => isset($datas['meeting_date'])?$datas['meeting_date']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]); 
    //     return $sql;
    // } 

    // public function UpdateMeetings($datas,$id){
    //     $sql = DB::table('meetings')->where('id',$id)->update([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'image' => isset($datas['image'])?$datas['image']:null,
    //         'desc' => isset($datas['desc'])?$datas['desc']:null,
    //         'price' => isset($datas['price'])?$datas['price']:null,
    //         'meeting_date' => isset($datas['meeting_date'])?$datas['meeting_date']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     return $sql;
    // }

    // public function DeleteMeetings($id)
    // {
    //     $file = DB::table('meetings')->where('id', $id)->value('image');
    //     try {
    //         @unlink(public_path('uploads/meetings/'.$file));
    //     } catch (\ErrorException $e) {
    //     }
    //     $sql = DB::table('meetings')->where('id', $id)->delete();
    //     return $sql;
    // }




    // public function coursesCount(){
    //     $sql = DB::table('courses')->count();
    //     return $sql;
    // }
    // public function coursesListAll($limit){
    //     $sql = DB::table('courses')->get();
    //     return $sql;
    // }
    
    // public function coursesSel($id){
    //     $sql = DB::table('courses')->where('id',$id)->first();
    //     return $sql;
    // }

    // public function AddCourses($datas){      
    //     $sql = DB::table('courses')->insert([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'image' => isset($datas['image'])?$datas['image']:null,
    //         'desc' => isset($datas['desc'])?$datas['desc']:null,
    //         'price' => isset($datas['price'])?$datas['price']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]); 
    //     return $sql;
    // } 

    // public function UpdateCourses($datas,$id){
    //     $sql = DB::table('courses')->where('id',$id)->update([
    //         'title' => isset($datas['title'])?$datas['title']:null,
    //         'image' => isset($datas['image'])?$datas['image']:null,
    //         'desc' => isset($datas['desc'])?$datas['desc']:null,
    //         'price' => isset($datas['price'])?$datas['price']:null,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     return $sql;
    // }

    // public function DeleteCourses($id)
    // {
    //     $file = DB::table('courses')->where('id', $id)->value('image');
    //     try {
    //         @unlink(public_path('uploads/courses/'.$file));
    //     } catch (\ErrorException $e) {
    //     }
    //     $sql = DB::table('courses')->where('id', $id)->delete();
    //     return $sql;
    // }




    // public function contactCount(){
    //     $sql = DB::table('contact')->count();
    //     return $sql;
    // }
    // public function contactListAll($limit){
    //     $sql = DB::table('contact')->paginate($limit);
    //     return $sql;
    // }
    // public function DeleteContact($id)
    // {
    //     $sql = DB::table('contact')->where('id', $id)->delete();
    //     return $sql;
    // }



}
