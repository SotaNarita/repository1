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

/*****���w���珈��*****/

//���w�̓_���̍ő�l�����߂�
	max = 0;
	for(i = 0; i<5; i++){
		if(max < test[0][i])
			max = test[0][i];
	}
	printf("���w�̍ō��_��%d�_\n", max);
//���w�̓_���̍Œ�l�����߂�
	min = 100;
	for(i = 0; i<5; i++){
		if(min > test[0][i])
			min = test[0][i];
	}
	printf("���w�̍Œ�_��%d�_\n", min);
//���w�̕��ϓ_�����߂�
	avg = 0;
	sum = 0;
	for(i = 0; i<5; i++){
		sum += test[0][i];
	}
	avg = (double)sum/5;
	printf("���w�̕��ϓ_��%f�_\n\n", avg);

/*****�����܂łŐ��w�̏���*****/

/*****�������畨���̏���*****/

//�����̓_���̍ő�l�����߂�
	max = 0;
	for(i = 0; i<5; i++){
		if(max < test[1][i])
			max = test[1][i];
	}
	printf("�����̍ō��_��%d�_\n", max);
//�����̓_���̍Œ�l�����߂�
	min = 100;
	for(i = 0; i<5; i++){
		if(min > test[1][i])
			min = test[1][i];
	}
	printf("�����̍Œ�_��%d�_\n", min);
//�����̕��ϓ_�����߂�
	avg = 0;
	sum = 0;
	for(i = 0; i<5; i++){
		sum += test[1][i];
	}
	avg = (double)sum/5;
	printf("�����̕��ϓ_��%f�_\n\n", avg);

/*****�����܂ŕ����̏���*****/

/*****���w�ƕ����̍��v�_*****/
	int mpSum = 0;
	int mpMax = 0;
	for(i = 0; i<5; i++){
		mpSum = test[0][i]+test[1][i];
		if (mpMax<mpSum){
			mpMax = mpSum;
		}
	}
	printf("���w�ƕ����̍��v�l�̍ō��_��%d�_\n", mpMax);
	return 0;
}
