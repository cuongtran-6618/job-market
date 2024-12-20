<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Job;
use App\Models\Category;
use Nnjeim\World\Models\City;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query = Job::query();

            // Search functionality
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            }

            // Filter by category
            if ($request->has('category')) {
                $query->where('category_id', $request->input('category'));
            }

            // Sort functionality
            $sortField = $request->input('sort', 'created_at');
            $sortDirection = $request->input('direction', 'desc');
            $query->orderBy($sortField, $sortDirection);

            // Paginate results
            $posts = $query->paginate(10)
                ->appends($request->query());

            $data = response()->json([
                'status' => 'success',
                'posts' => $posts,
            ]);
            //dd($data);

            return view('post.index', compact('posts'));

        } catch (\Exception $e) {
            Log::error('Error fetching posts: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch posts'
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd('controller');
        try {
            // $param = $request->getParameters();
            $selectedCategory = $request->input('category');
            $cityList = City::where('country_code', 'FI')->orderBy('name', 'desc')->get();

            $cities = [];

            foreach($cityList as $city) {
                $cities[$city->id] = $city->name;
            }

            $categories = Category::all()->pluck('description', 'id');

            return view('post.create', compact('selectedCategory', 'cities', 'categories'));
        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
