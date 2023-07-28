package com.example.app.Requests;

import android.util.Log;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.toolbox.StringRequest;

public class ReadRequest implements Runnable {

    @Override
    public void run() {
        Log.i("TAG_JSON","running");
        try {
            StringRequest jsonForPostRequest = new StringRequest(
                    Request.Method.GET,
                    "http://127.0.0.1:8000/api/get/users",
                    response -> {
                        Log.i("TAG_JSON","data returned: " + response);
                        if (response != null) {
                            Log.i("TAG_JSON","data returned: " + response);
                        }
                    }, error -> Log.e("TAG_ERROR","Error: " + error));
            jsonForPostRequest.setRetryPolicy(new DefaultRetryPolicy(10000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
        } catch (Exception ignored) {
            Log.e("TAG_ERROR", ignored.getMessage());
        }
    }
}