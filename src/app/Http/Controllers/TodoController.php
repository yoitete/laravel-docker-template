<?php
namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest; 
use App\Todo;


class TodoController extends Controller
{

    private $todo;

    public function __construct(Todo $todo)
    {
        //「引数で受け取った Todoインスタンス（$todo）を
        // このクラスのtodoプロパティ（$this->todo)に代入する
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();

        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
{
    return view('todo.create');
}

public function store(TodoRequest $request) 
{
    $inputs = $request->all();

    $this->todo->fill($inputs);
    $this->todo->save(); 
    // dd($todo->fill($inputs));
    // fillを使わない書き方$todo->content = $inputs['content'];
    // src > resources > views > todo > index.blade.php
    return redirect()->route('todo.index');
}

// ルートパラメータを$idで受け取っている
public function show($id)
{
// データベースのidカラムが$idの値と一致するレコードを取得
$todo = $this->todo->find($id);
return view('todo.show', ['todo' => $todo]);

}

public function edit($id)
{

$todo = $this->todo->find($id);
return view('todo.edit', ['todo' => $todo]);

}

// 第1引数: リクエスト情報の取得　第2引数: ルートパラメータの取得
//  ルートパラメーター : // /{id} /todo/1や/todo/2の「1」や「2」のような変数の部分
// idなどその情報を特定するためにしている
// メソッドインジェクション : メソッドの引数の左側にクラス名を書くことで、インスタンス化が自動で行われる
// TodoRequestクラスとRequestクラスの違いはバリデーションがあるかないか
// メソッドインジェクションを利用することで、先ほどのバリデーションルールを適用
 public function update(TodoRequest $request, $id)
{
    // $requestにはTodoRequestクラスのインスタンスが入っている
    // $inputsの連想配列のデータ型で要素には_token・_method・contentが入っている
    $inputs = $request->all();

    // データベースのidカラムが$idの値と一致するレコードを取得                                      
    // $todoはtodoクラスのインスタンスが入っていて中身は編集対象レコードがattributes(アトリビュート)の中に連想配列で入っている
    // todoはプロパティ
    $todo = $this->todo->find($id);
    $todo->fill($inputs)->save();

    return redirect()->route('todo.show', $todo->id);
}

public function delete($id)
{
    $todo = $this->todo->find($id);
    $todo->delete();
// リダイレクト
    return redirect()->route('todo.index');
}
}

