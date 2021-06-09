1.Considering the url
lets try to have the product of special category.here we have two categories slug,"fashion" and "food".
You must hit this url in browser.ucan use single or multiple categories slug for filteration.
url: http://localhost:8000/product?categories=fashion,food





2.Creating the route
Create the following route in routes/web.php
Route::get('/product',[App\Http\Controllers\Api\Product\ProductController::class, 'product']);




3.Creating controller and query in controller
Create the ProductController and make the function product() and whrite query.
Declare the function withScope() and provide the parameter "categories" which was used in url as shown bellow.
import CategoryScope class.
<?php
use App\Models\Product;
use App\Scoping\Scopes\CategoryScope;
class ProductController extends Controller
{
public function product(){
        $products = Product::latest()
        ->withScopes(
            $this->scopes()
        )
        ->get();
        return $products;
    }
    protected function scopes()
    {
        return [
            'categories' => new CategoryScope(),
        ];
    }
}
 





4.Creating the CategoryScope class
Create the CategoryScope class which was used in ProductController and declare a function apply()
containing two parameter and return query where products categories "slug" match the url categories "slug" as 
shown bellow; 
<?php
use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;
class  CategoryScope implements Scope
{
    public function apply(Builder $builder,$value){
        return $builder->whereHas('categories',function($builder) use ($value){
            $builder->whereIn('slug',explode(',',$value));
        });
    }
}






5.Creating the eloquent relationship
Create the eloquent many to many relationship in app/Models/Product.
public function categories()
{
    return $this->belongsToMany(Category::class, 'product_category')
        ->withTimestamps();
}






6.make the Scope interface
Create the following interface which was implemented on CategoryScope class.

<?php
use Illuminate\Database\Eloquent\Builder;
interface Scope
{
    public function apply(Builder $builder,$value);
}

  




7.Creating the trait CanBeScoped
Create the CanBeScoped trait. define the function withScopes which was used in ProductController.
impost class Scopper.
<?php
use App\Scoping\Scoper;
use Illuminate\Database\Eloquent\Builder;
trait CanBeScoped
{
    public function scopeWithScopes(Builder $builder,$scopes=[]){
        return (new Scoper(request()))->apply($builder,$scopes);
    }
}







8.use trait CanBeScoped
use it in app/Models/Product.
<?php
use App\Models\Traits\CanBeScoped;
class Product extends Model
{
    use CanBeScoped;
} 






9.Create the Scoper class 
Create the scopper class which was called in function scopeWithScopes() in trait CanBeScoped.
<?php
use Illuminate\Http\Request;
use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
class Scoper
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function apply(Builder $builder,array $scopes){
        foreach($this->limitScopes($scopes) as $key=>$scope){
            if(!$scope instanceof Scope){
                continue;
            }
            $scope->apply($builder,$this->request->get($key));
        }
        return $builder;
    }
    protected function limitScopes(array $scopes){
        return Arr::only(
            $scopes,
            array_keys($this->request->all())
        );
    }
}








