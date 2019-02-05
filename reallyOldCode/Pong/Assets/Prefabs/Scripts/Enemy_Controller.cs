using UnityEngine;
using System.Collections;

public class Enemy_Controller : MonoBehaviour {

	public GameObject Ball;
	Ball_Controller BS_script;

	// Use this for initialization
	void Start () 
	{
		BS_script = Ball.GetComponent<Ball_Controller>();
	}
	
	// Update is called once per frame
	void Update () 
	{
		if(Ball.transform.position.x > transform.position.x)
		{
			transform.position = new Vector3(transform.position.x + 0.2f, transform.position.y, transform.position.z);
		}
		
		if(Ball.transform.position.x < transform.position.x)
		{
			transform.position = new Vector3(transform.position.x - 0.2f, transform.position.y, transform.position.z);
		}
	}
}
