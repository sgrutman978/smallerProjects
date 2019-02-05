using UnityEngine;
using System.Collections;

public class Player_Controller : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
		Ray ray_position = Camera.main.ScreenPointToRay (Input.mousePosition);
		transform.position = new Vector3 (ray_position.GetPoint (10f).x, 0.0f, transform.position.z);
	}
}
