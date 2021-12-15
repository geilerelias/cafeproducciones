<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Role::all();
        return Inertia::render('Authorization/Role', ['data' => $data]);
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

        Role::create($request->all());

        return redirect()->back()
            ->with('message', 'Role Created Successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function assignPermissions(Request $request)
    {
        $role = Role::find($request->role);
        $role->syncPermissions($request->permission);

        return redirect()->back()
            ->with('message', 'Permissions successfully set.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getPermissions($name)
    {
       return Role::findByName($name)->permissions;
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
            $role = Role::find($request->input('id'));
            $role->name = $request->name;
            $role->save();
            return redirect()->back()
                ->with('message', 'Role Updated Successfully.');
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
            Role::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
