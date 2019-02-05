using UnityEngine;
using System.Collections;

public class Ball_Controller : MonoBehaviour {
	int Invert;
	public int Towards_Player = 1;
	// Use this for initialization
	void Start () {
		Invert = 1;
		Towards_Player = 1;;
		rigidbody.velocity = new Vector3(20.0f, 0.0f, 5.0f);
	}
	
	// Update is called once per frame
	void Update () {
		
	}

	void OnCollisionEnter(Collision ball_collide){
		if (ball_collide.gameObject.name == "Wall_Left" || ball_collide.gameObject.name == "Wall_Right") {
			print("hhhh");
			Invert = Invert * -1;
			rigidbody.velocity = new Vector3(20.0f * Invert, 0.0f, 5.0f * Towards_Player);
		}
		if (ball_collide.gameObject.name == "Player" || ball_collide.gameObject.name == "Enemy") {
			print("aaaaa");
			Towards_Player = Towards_Player * -1;
			rigidbody.velocity = new Vector3(20.0f * Invert, 0.0f, 5.0f * Towards_Player);
		}
		}
}
