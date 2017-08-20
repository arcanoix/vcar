<?php

namespace App\Http\Controllers;

use App\Client;
use App\DeliveryReport;
use App\Maintenance;
use App\Transport;
use App\Driver;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Count Clients
        $countClients = Client::all()->count();
        // Count transports
        $countTransports = Transport::all()->count();
        // Count drivers
        $countDrivers = Driver::all()->count();
        // Count deliveryReports
        $countdeliveryReports = deliveryReport::all()->count();

        // Last Clients
        $lastClients = Client::orderBy('id', 'desc')->take(5)->get();

        // Last DeliveryReport
        $lastDeliveryReports = DeliveryReport::orderBy('id', 'desc')->take(5)->get();

        // Last Maintenance
        $lastMaintenances = Maintenance::orderBy('id', 'desc')->take(5)->get();

        // Last Logs
        $logs = Activity::orderBy('id', 'desc')->take(5)->get();

        return view('dashboard.index', compact('countClients', 'countTransports', 'countDrivers', 'countdeliveryReports', 'lastClients', 'lastDeliveryReports', 'lastMaintenances', 'logs'));
    }
}
