package com.group14.irecycle.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.authority.AuthorityUtils;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.UserRepository;

@Service
public class UserDetailsServiceImp implements UserDetailsService {
	@Autowired
	private UserRepository userRepository;
	
	// Fetches user from database
	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
		User currentUser = userRepository.findByUsername(username);
        UserDetails user = new org.springframework.security.core
            .userdetails.User(username, currentUser.getPassword(), 
            		true , true, true, true, AuthorityUtils.createAuthorityList("user"));
        return user;
	}	
}
