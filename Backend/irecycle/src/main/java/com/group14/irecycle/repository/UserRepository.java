package com.group14.irecycle.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.group14.irecycle.model.User;

@Repository
public interface UserRepository extends CrudRepository <User, Long> {

	User findByEmail(String email);

	User findByUsername(String username);
	
}
