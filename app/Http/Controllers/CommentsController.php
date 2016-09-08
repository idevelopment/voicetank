<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\CommentValidator;
use App\Idea;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    /**
     * CommentsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Save a comment on a topic.
     *
     * @url:platform  POST: /feedback/comment/{fid}
     * @see:phpunit   TODO: write test for failing validation.
     * @see:phpunit   TODO: write test for no validation errors.
     *
     * @param  CommentValidator $input
     * @param  int $fid the feedback item id in the database
     * @return \Illuminate\Http\RedirectResponse
     */
    public function comment(CommentValidator $input, $fid)
    {
        $comments = Comments::create($input->except('_token'));
        Idea::find($fid)->comments()->attach($comments->id);

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'Your comment has been saved');

        return redirect()->back();
    }

    public function report()
    {

    }
}
