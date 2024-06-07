<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPage;
use Illuminate\Http\Request;

class PrivacyEnController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = PrivacyPage::get()->first();
        return view('backend.layouts.privacy_page.privacy_en', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        PrivacyPage::where('id', 1)->update(['content_en' => $request->content_en]);

        return redirect(url('/admin'));
    }

}
