#include <stdio.h>

int main()
{
	int test[2][5] = {
			{72,88,72,81,68},{48,39,91,82,78}
	};
	int max;
	int min;
	double avg;
	int sum;
	int i;

/*****数学から処理*****/

//数学の点数の最大値を求める
	max = 0;
	for(i = 0; i<5; i++){
		if(max < test[0][i])
			max = test[0][i];
	}
	printf("数学の最高点は%d点\n", max);
//数学の点数の最低値を求める
	min = 100;
	for(i = 0; i<5; i++){
		if(min > test[0][i])
			min = test[0][i];
	}
	printf("数学の最低点は%d点\n", min);
//数学の平均点を求める
	avg = 0;
	sum = 0;
	for(i = 0; i<5; i++){
		sum += test[0][i];
	}
	avg = (double)sum/5;
	printf("数学の平均点は%f点\n\n", avg);

/*****ここまでで数学の処理*****/

/*****ここから物理の処理*****/

//物理の点数の最大値を求める
	max = 0;
	for(i = 0; i<5; i++){
		if(max < test[1][i])
			max = test[1][i];
	}
	printf("物理の最高点は%d点\n", max);
//物理の点数の最低値を求める
	min = 100;
	for(i = 0; i<5; i++){
		if(min > test[1][i])
			min = test[1][i];
	}
	printf("物理の最低点は%d点\n", min);
//物理の平均点を求める
	avg = 0;
	sum = 0;
	for(i = 0; i<5; i++){
		sum += test[1][i];
	}
	avg = (double)sum/5;
	printf("物理の平均点は%f点\n\n", avg);

/*****ここまで物理の処理*****/

/*****数学と物理の合計点*****/
	int mpSum = 0;
	int mpMax = 0;
	for(i = 0; i<5; i++){
		mpSum = test[0][i]+test[1][i];
		if (mpMax<mpSum){
			mpMax = mpSum;
		}
	}
	printf("数学と物理の合計値の最高点は%d点\n", mpMax);
	return 0;
}
