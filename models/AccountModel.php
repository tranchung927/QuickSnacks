<?php

/* 
 * *
 */

class AccountModel extends Model
{
	function getUserByUsername($username)
	{
		$result = array();
		$sql = "SELECT * FROM account WHERE username = '" . $username . "'";
		if ($this->conn->query($sql)->rowCount() == 0) {
			return false;
		} else {
			foreach ($this->conn->query($sql) as $row) {
				$result = $row;
			}
			return $result;
		}
	}

	function getUserByEmail($email)
	{
		$result = array();
		$sql = "SELECT * FROM account WHERE email = '" . $email . "'";
		if ($this->conn->query($sql)->rowCount() == 0) {
			return false;
		} else {
			foreach ($this->conn->query($sql) as $row) {
				$result = $row;
			}
			return $result;
		}
	}

	function getUserById($id)
	{
		$result = array();
		$sql = "SELECT * FROM account WHERE id = '" . $id . "'";
		if ($this->conn->query($sql)->rowCount() == 0) {
			return false;
		} else {
			foreach ($this->conn->query($sql) as $row) {
				$result = $row;
			}
			return $result;
		}
	}

	function createUser($firstName, $lastName, $email, $phone, $password)
	{
		$now = new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh'));
		$now = $now->format('Y-m-d H:i:s');
		return $this->insert(
			'account',
			array($firstName, $lastName, $email, $phone, sha1($password)),
			array('first_name', 'last_name', 'email', 'phone', 'password')
		);
	}

	function updateUser($id, $firstName, $lastName, $email, $phone)
	{
		return $this->update(
			'account',
			array('first_name', 'last_name', 'email', 'phone'),
			array($firstName, $lastName, $email, $phone),
			"id=" . $id
		);
	}

	function updateAddress($id, $addressId)
	{
		return $this->update(
			'account',
			array('address_id'),
			array($addressId),
			"id=" . $id
		);
	}
}
