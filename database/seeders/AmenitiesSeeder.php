<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

DB::table('amenities')->insert([
            'name' => 'Half board',
            'picture' => "M6 22v-9.15q-1.35-.35-2.175-1.425T3 9V2h2v6h1V2h2v6h1V2h2v7q0 1.35-.825 2.425T8 12.85V22zm10 0v-9.525q-1.35-.45-2.175-1.887T13 7.325Q13 5.1 14.175 3.55T17 2t2.825 1.562T21 7.35q0 1.825-.825 3.25T18 12.475V22z",
            'content' => "Access to our restaurant for dinner. with a soft drink included in the price",
            'price' => '(75€ per person per day)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Full board',
            'picture' => "M6 22v-9.15q-1.35-.35-2.175-1.425T3 9V2h2v6h1V2h2v6h1V2h2v7q0 1.35-.825 2.425T8 12.85V22zm10 0v-9.525q-1.35-.45-2.175-1.887T13 7.325Q13 5.1 14.175 3.55T17 2t2.825 1.562T21 7.35q0 1.825-.825 3.25T18 12.475V22z",
            'content' => "Access to  our restaurant for lunch and dinner with a soft drink included for each meals",
            'price' => '(150€ per person per day)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Breakfast',
            'picture' => "M11 18q-2.925 0-4.962-2.037T4 11V5q0-.825.588-1.412T6 3h12.5q1.45 0 2.475 1.025T22 6.5t-1.025 2.475T18.5 10H18v1q0 2.925-2.037 4.963T11 18M6 8h10V5H6zm12 0h.5q.625 0 1.063-.437T20 6.5t-.437-1.062T18.5 5H18zM4 21v-2h16v2z",
            'content' => "Continental buffet available on demand. Must be specified the day before if needed ",
            'price' => '(45€ per person per day )',
        ]);

DB::table('amenities')->insert([
            'name' => 'Dry cleaning',
            'picture' => "M7 22v-6H5.4q-1 0-1.7-.7T3 13.6q0-.725.4-1.337t1.05-.913L11 8.45V7.8q-.9-.325-1.45-1.087T9 5q0-1.25.875-2.125T12 2t2.125.875T15 5h-2q0-.425-.288-.712T12 4t-.712.288T11 5t.288.713T12 6t.713.288T13 7v1.45l6.55 2.9q.65.3 1.05.913T21 13.6q0 1-.7 1.7t-1.7.7H17v6zm-1.6-8H7v-1h10v1h1.6q.175 0 .288-.125T19 13.55q0-.125-.062-.213t-.188-.137l-6.75-3l-6.75 3q-.125.05-.187.138T5 13.55q0 .2.113.325T5.4 14",
            'content' => "Dry cleaning available",
            'price' => '(250€ per person per day',
        ]);

DB::table('amenities')->insert([
            'name' => 'High Tech Pack',
            'picture' => 5,
            'content' => "Laptop, batteries and other amenities available on demand",
            'price' => '(100€ per week) ',
        ]);

DB::table('amenities')->insert([
            'name' => 'Wifi',
            'picture' => "M4.925 19.075q-1.35-1.375-2.137-3.187T2 12q0-2.1.788-3.912t2.137-3.163L6.35 6.35q-1.1 1.1-1.725 2.55T4 12q0 1.675.625 3.125T6.35 17.65zM7.75 16.25q-.8-.825-1.275-1.912T6 12q0-1.275.475-2.363T7.75 7.75l1.425 1.425q-.55.55-.862 1.275T8 12t.313 1.55t.862 1.275zM12 14q-.825 0-1.412-.587T10 12t.588-1.412T12 10t1.413.588T14 12t-.587 1.413T12 14m4.25 2.25l-1.425-1.425q.55-.55.863-1.275T16 12t-.312-1.55t-.863-1.275L16.25 7.75q.8.8 1.275 1.887T18 12q0 1.25-.475 2.337T16.25 16.25m2.825 2.825L17.65 17.65q1.1-1.1 1.725-2.55T20 12q0-1.675-.625-3.125T17.65 6.35l1.425-1.425q1.35 1.35 2.138 3.162T22 12q0 2.075-.788 3.888t-2.137 3.187",
            'content' => "High capacity wifi with fiber",
            'price' => '(25€)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Conciergerie',
            'picture' => "M2 19v-2h20v2zm1-3v-1q0-3.2 1.963-5.65T10 6.25V6q0-.825.588-1.412T12 4t1.413.588T14 6v.25q3.1.65 5.05 3.1T21 15v1z",
            'content' => "Conciergeries services available on demand only",
            'price' => 'Included for free',
        ]);

DB::table('amenities')->insert([
            'name' => 'Spa',
            'picture' => 'M6 11.275V13.6q-.5.35-.75.713T5 15q0 .15.038.3t.137.3L6 16h2.25l.15.425L9.5 16h4l.725.95l2.675-.4L18 15h1q0-.325-.25-.687T18 13.6v-2.325q1.45.725 2.225 1.688T21 15l1 1.5l-1 3h-3.1l.1.5l-2.5 1h-7l-.25-.65L5.5 21L2 18.5V16l1.05-.525q-.025-.125-.038-.238T3 15q0-1.075.775-2.038T6 11.276m-1.95 6.8l.925-.925L4 16.675l-.5.25v.775zm1.825 1.3l1.875-.45L7.2 17.5h-.45l-1.425 1.425zm3.675.125h3.025l.675-1.35l-.5-.65H9.8l-.85.35zm4.75 0h.9l1.05-.425l-.175-.875l-1.125.175zm3.45-1.5h2.175l.425-1.275l-.15-.225h-1.425zm-11-5q.125-.375.188-.712T7 11.55q0-.75-.375-1.3t-.85-1.175t-.85-1.388t-.375-1.962q0-.375.038-.8T4.725 4H6.75q-.125.575-.162.95t-.038.7q0 .925.388 1.537T7.775 8.4t.838 1.325T9 11.6q0 .35-.05.7t-.15.7zm4 0q.125-.375.188-.712T11 11.55q0-.75-.375-1.3t-.85-1.175t-.85-1.388t-.375-1.962q0-.375.038-.8T8.725 4h2.025q-.125.575-.175.95t-.05.7q0 .925.387 1.537T11.75 8.4t.838 1.325t.387 1.875q0 .35-.038.7t-.137.7zm4 0q.125-.375.188-.712T15 11.55q0-.75-.375-1.3t-.85-1.175t-.85-1.388t-.375-1.962q0-.375.038-.8T12.725 4h2.025q-.125.575-.175.95t-.05.7q0 .925.387 1.537T15.75 8.4t.838 1.325t.387 1.875q0 .35-.038.7t-.137.7z',
            'content' => "Treat yourself to a relaxing experience at this elegant spa. Unwind with a massage, manicure or pedicure, and discover our spa treatments",
            'price' => '(400€ per week)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Valet Parking',
            'picture' => "M6 19v1q0 .425-.288.713T5 21H4q-.425 0-.712-.288T3 20v-8l2.1-6q.15-.45.538-.725T6.5 5h11q.475 0 .863.275T18.9 6l2.1 6v8q0 .425-.287.713T20 21h-1q-.425 0-.712-.288T18 20v-1zm-.2-9h12.4l-1.05-3H6.85zm1.7 6q.625 0 1.063-.437T9 14.5t-.437-1.062T7.5 13t-1.062.438T6 14.5t.438 1.063T7.5 16m9 0q.625 0 1.063-.437T18 14.5t-.437-1.062T16.5 13t-1.062.438T15 14.5t.438 1.063T16.5 16",
            'content' => "Leave your car to us for parking and enjoy your stay",
            'price' => '(45€ per day)',
        ]);

DB::table('amenities')->insert([
            'name' => 'All Inclusive',
            'picture' => "M12 22q-2.35-.3-4.2-1.2t-3.137-2.35T2.7 15.088t-.675-4.238q2.75.275 4.65 1t3.088 2.05t1.712 3.313T12 22m0-8.425q-.575-.875-1.562-1.725T8.15 10.3q.15-1.05.5-2.175t.85-2.212t1.138-2.088T12 2q.725.825 1.363 1.825T14.5 5.913t.85 2.212t.5 2.175q-1.3.675-2.287 1.525T12 13.575m2 8.025q-.05-1.75-.262-3.238t-.663-2.812q1.175-2.025 3.238-3.3t5.662-1.4q.025 3.95-2.113 6.813T14 21.6",
            'content' => "All amenities included",
            'price' => 'Price to be discussed while checking-out',
        ]);
    }
}
