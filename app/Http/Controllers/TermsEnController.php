<?php

namespace App\Http\Controllers;

use App\Models\TermsPage;
use Illuminate\Http\Request;

class TermsEnController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = TermsPage::get()->first();
        return view('backend.layouts.terms_page.terms', compact('content'));
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
        TermsPage::where('id', 1)->update(['content_en' => $request->content_en]);

        return redirect(url('/admin'));
    }

}
