<?php

namespace MichaelJBerry\Summernote\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MichaelJBerry\Summernote\SummernoteConfiguration;

class SummernoteConfigurationController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MichaelJBerry\Summernote\SummernoteConfiguration  $summernoteConfiguration
     * @return \Illuminate\Http\Response
     */
    public function edit(SummernoteConfiguration $summernoteConfiguration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MichaelJBerry\Summernote\SummernoteConfiguration  $summernoteConfiguration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SummernoteConfiguration $summernoteConfiguration)
    {
        //
    }

}
