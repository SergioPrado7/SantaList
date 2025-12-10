<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StudentsController extends Controller
{
    private $client;
    private $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('API_BASE_URL');
    }

    public function index()
    {
        $response = $this->client->get("$this->baseUrl/students");
        $students = json_decode($response->getBody(), true);

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $this->client->post("$this->baseUrl/students", [
            "json" => $request->all()
        ]);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $response = $this->client->get("$this->baseUrl/students/$id");
        $student = json_decode($response->getBody(), true);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->client->put("$this->baseUrl/students/$id", [
            "json" => $request->all()
        ]);

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $this->client->delete("$this->baseUrl/students/$id");
        return redirect()->route('students.index');
    }
}
