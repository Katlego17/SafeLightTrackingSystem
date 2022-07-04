<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhaseController extends Controller
{
    public function showPhases()
    {
        return view('user.showphases');
    }

    //showing all phases***************************************************************************************************************
    public function showaddedphase()
    {
        return view('user.phases.addedPhase');
    }

    public function showprecastphase()
    {
        return view('user.phases.pre-castPhase');
    }

    public function showcastphase()
    {
        return view('user.phases.castPhase');
    }

    public function showpostcastphase()
    {
        return view('user.phases.post-castPhase');
    }

    public function showassembledphase()
    {
        return view('user.phases.assembledPhase');
    }

    public function showstoredphase()
    {
        return view('user.phases.storedPhase');
    }

    public function showsoldphase()
    {
        return view('user.phases.soldPhase');
    }

    public function showcommissionedphase()
    {
        return view('user.phases.commissionedPhase');
    }

    public function showfailed()
    {
        return view('user.phases.failed');
    }
}
