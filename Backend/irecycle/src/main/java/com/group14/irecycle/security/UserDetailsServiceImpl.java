package com.group14.irecycle.security;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.UserRepository;

@Service
public class UserDetailsServiceImpl implements UserDetailsService {

	// injects UserRepository
	@Autowired
	UserRepository userRepository;
	
	// authenticates user from database
	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
		User user = userRepository.findByUsername(username);
		return new UserDetailsImpl(user);
	}

}
