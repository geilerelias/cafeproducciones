<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Permission::all();
        return Inertia::render('Authorization/Permission', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function all()
    {
        return Permission::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
        ])->validate();

        $permission = Permission::make($request->all());
 return $permission->saveOrFail();
        return redirect()->back()
            ->with('message', 'Permission Created Successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
        ])->validate();


        if ($request->has('id')) {
            $Permission = Permission::find($request->input('id'));
            $Permission->name = $request->name;
            $Permission->save();
            return redirect()->back()
                ->with('message', 'Permission Updated Successfully.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Permission::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
