using UnityEngine;
using System.Collections;

public class Score : MonoBehaviour {

	int PlayerScore = 0;
	int EnemyScore = 0;

	public void IncreaseScore(int PlayerType)
	{
		if(PlayerType == 1)
		{
			PlayerScore++;
		}
		
		if(PlayerType == 2)
		{
			EnemyScore++;
		}
	}
	
	void OnGUI ()
	{
		GUI.Label(new Rect(10, 10, 300, 30), "PLayer Score: " + PlayerScore.ToString ());
		GUI.Label(new Rect(10, 40, 300, 30), "Enemy Score: " + EnemyScore.ToString ());
	}
	
	void Start ()
	{
	
	}
	
	// Update is called once per frame
	void Update () 
	{
	
	}
}
