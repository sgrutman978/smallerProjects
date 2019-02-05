using UnityEngine;
using System.Collections;

public class Ball_Controller : MonoBehaviour 
{
	int Invert;
	public int Towards_Player = 1;

	// Use this for initialization
	void Start () 
	{
		Invert = 1;
		Towards_Player = 1;
		rigidbody.velocity = new Vector3(10.0f, 0.0f, -5.0f);
		
	}
	
	// Update is called once per frame
	void Update () 
	{
		if(transform.position.z > 12.096754)
		{
			GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (1);
			Start ();
			transform.position = new Vector3(0.0f, 0.0f, 0.0f);
		}
		
		if(transform.position.z < -12.096754)
		{
			GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (2);
			Start ();
			transform.position = new Vector3(0.0f, 0.0f, 0.0f);
		}
	}
		
	void OnCollisionEnter(Collision ball_collide)
	{
		if(ball_collide.gameObject.name == "Wall_Left" || ball_collide.gameObject.name == "Wall_Right")
		{
			Invert = Invert * -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f * Towards_Player);
		}
		
		if(ball_collide.gameObject.name == "Player" || ball_collide.gameObject.name == "Enemy")
		{
			Towards_Player = Towards_Player * -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f * Towards_Player);
		}
		
		else if(ball_collide.gameObject.name == "Player")
		{
			Towards_Player = -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f);
		}
		
		else if(ball_collide.gameObject.name == "Enemy")
		{
			Towards_Player = -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f);
		}
		
	}
	
}
