namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function edit()
    {
        if (auth()->user()->can('edit articles')) {
            // Hiển thị form chỉnh sửa
            return view('articles.edit');
        } else {
            abort(403, 'Không có quyền');
        }
    }
}
