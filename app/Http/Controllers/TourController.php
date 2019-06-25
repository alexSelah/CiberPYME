<?php

namespace CiberPYME\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	return view('tour/tour');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase1()
    {
       	return view('tour/fase1');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase2()
    {
       	return view('tour/fase2');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase3()
    {
       	return view('tour/fase3');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase4()
    {
       	return view('tour/fase4');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase5()
    {
       	return view('tour/fase5');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase6()
    {
       	return view('tour/fase6');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fin()
    {
       	return view('tour/fin');
    }
}
