package com.group14.irecycle.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.UserRepository;

@RestController
public class UserController {
	@Autowired
	private UserRepository userRepository;

	@RequestMapping("/users")
	public Iterable<User> getUsers() {
		return userRepository.findAll();
	}
}
