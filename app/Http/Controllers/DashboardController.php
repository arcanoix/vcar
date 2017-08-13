<?php

namespace App\Http\Controllers;

use App\Client;
use App\DeliveryReport;
use App\Maintenance;
use App\Transport;
use App\Driver;
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
        $lastClients = Client::all()->take(5)->sortBy('id');

        // Last DeliveryReport
        $lastDeliveryReports = DeliveryReport::all()->take(5)->sortBy('id');

        // Last Maintenance
        $lastMaintenances = Maintenance::all()->take(5)->sortBy('id');

        return view('dashboard.index', compact('countClients', 'countTransports', 'countDrivers', 'countdeliveryReports', 'lastClients', 'lastDeliveryReports', 'lastMaintenances'));
    }
}
