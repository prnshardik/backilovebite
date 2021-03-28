<?php

    namespace App\Http\Controllers\Back;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Setting;
    use App\Http\Requests\CategoryRequest;
    use DataTables, DB, File;

    class TempSettingsController extends Controller{
        public function index(){
            return view('back.temp_settings.index');
        }
    }
