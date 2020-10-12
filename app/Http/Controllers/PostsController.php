<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class PostsController extends Controller
{

    public function index ()  {

        $books = \Illuminate\Support\Facades\DB::table("books")->get();


        return view('book')->with("books",$books);}



    public function save(Request $request){
        $book = new book($request->all());
        return $book;
//        $book->save();
//        return redirect()->back();
//       დასეივებისდროს შემექმნა პროლემა: SQLSTATE[42S22]: Column not found:
// 1054 Unknown column 'updated_at' in 'field list'
// (SQL: insert into `books` (`title`, `author`, `pages`, `language`, `updated_at`, `created_at`)
// values (The 100, kass Morgan, 200, Eng, 2020-10-12 12:14:15, 2020-10-12 12:14:15))
//        ამ ერორს მიჩვენედა დავსერჩე მაგრამ მაინც ვერ მოვუხერხე ვერაფერი. ამიტო ბაზაში დამტების ნაცვლად პირდაპირ
//        გვერდზე დავაეჭდინე ლისთის სახით
    }

    public function create() {
        return view("create");        }


}
