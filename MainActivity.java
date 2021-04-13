package com.example.practice;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    String full_name = "Unknown";
    int rate = 100000;
    int photo = 0;
    int fcount = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        
    TextView userName = findViewById(R.id.userName);
        userName.setText(full_name);

//レート表示
    TextView rating = findViewById(R.id.rating);
        rating.setText(String.valueOf(rate));
        
//写真数表示
    TextView photoAmount = findViewById(R.id.photoAmount);
        photoAmount.setText(String.valueOf(photo));

//フォロワー数表示
    TextView followersAmount = findViewById(R.id.followersAmount);
        followersAmount.setText(String.valueOf(fcount));

//フォロワー数増加ボタン
    Button followUp = (Button)findViewById(R.id.follow);
        followUp.setText("Follow Up!");
        followUp.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                ++fcount;
                followersAmount.setText(String.valueOf(fcount));
            }
        });

//フォロワー数減少ボタン
    Button followDown = (Button)findViewById(R.id.disFollow);
        followDown.setText("Follow Down...");
        followDown.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                if (fcount<=0) {
                    fcount = 0;
                }else{
                    --fcount;
                }
                followersAmount.setText(String.valueOf(fcount));
            }
        });
    }
}