<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Отримання значення коментаря та новини з запиту
        $commentText = $request->input('comment');
        $newsId = $request->input('news_id');
        $userId = $request->input('user_id'); // Отримання ID користувача з сесії

        // Переконайтеся, що user_id не є null
        if (is_null($userId)) {
            // Можливо, перенаправити користувача на сторінку з помилкою
            return redirect()->back()->withErrors(['error' => 'User not authenticated']);
        }

        // Створюємо новий коментар
        $comment = new Comment();
        $comment->user_id = $userId;
        $comment->news_id = $newsId;
        $comment->comment = $commentText;
        $comment->save();

        // Перенаправляємо на сторінку новин
        return redirect()->route('news-data-one', ['id' => $newsId]);
    }
}
