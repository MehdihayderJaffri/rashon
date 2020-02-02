<?php
  
namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB; 
class UsersExport implements FromCollection
{
    /**
    *@return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $persons = DB::table('people')
		            ->join('package', 'people.package_id', '=', 'package.id')
		            ->join('area', 'people.area_id', '=', 'area.id')
		            ->select('people.*', 'package.amount', 'area.area_name')
		            ->whereNull('stop_date')
		            ->get();

		return view('person', ['persons' => $persons]);

    }
}