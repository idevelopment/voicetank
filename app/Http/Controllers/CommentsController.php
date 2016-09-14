<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\CommentValidator;
use App\Http\Requests\ReportValidator;
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

    /**
     * Report a aggressive comment
     *
     * @url:platform  POST: TODO: register route
     * @see:phpunit   TODO: Write validation fails test.
     * @see:phpunit   TODO: Write validation no fail test.
     *
     * @param  ReportValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function report(ReportValidator $input)
    {
        // TODO: Write validator
        // TODO: Write the database backend.

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The comment has been reported');

        return redirect()->back();
    }

    /**
     * Remove a comment from some idea.
     *
     * @url:platform:  TODO: Register route
     * @see:phpunit:   TODO: Write phpunit test.
     *
     * @param  int $cid the comment id in the database
     * @param  Comments $comment the comments model for the database;
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($cid, Comments $comment)
    {
        $comment->find($cid);
        $comment->ideas()->sync([]);
        $comment->destroy($cid);

        session()->flash('class', 'alert aler-success');
        session()->flash('message', 'The comment has been deleted');

        return redirect()->back();
    }
}
