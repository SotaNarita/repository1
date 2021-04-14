#include <stdio.h>

int main()
{
	int test[2][5] = {
			{72,88,72,81,68},{48,39,91,82,78}
	};
	char subject[2][3] = {"数学", "物理"};
	int max;
	int min;
	double avg;
	int sum;
	int i;
	int k;
/*****数学と物理の平均点・最高点・最低点*****/
for(k = 0; k<2; k++){
	max = 0;
	for(i = 0; i<5; i++){
		if(max < test[k][i])
			max = test[k][i];
	}
	printf("%s\n", subject[k]);
	printf("最高点は%d点\n", max);
	min = 100;
	for(i = 0; i<5; i++){
		if(min > test[0][i])
			min = test[0][i];
	}
	printf("最低点は%d点\n", min);
	avg = 0;
	sum = 0;
	for(i = 0; i<5; i++){
		sum += test[0][i];
	}
	avg = (double)sum/5;
	printf("平均点は%f点\n\n", avg);
}

/*****数学と物理の合計の最高点*****/
	int mpSum = 0;
	int mpMax = 0;
	for(i = 0; i<5; i++){
		mpSum = test[0][i]+test[1][i];
		if (mpMax<mpSum){
			mpMax = mpSum;
		}
	}
	printf("数学と物理の合計点の最高点は%d点\n", mpMax);
	return 0;
}